// WebComponent responsible for feching query results and display it in a list.
// Should be usable as an input in a form, or to react on DOM events.

class MyAutoCompletion extends HTMLElement {

    lastSearch;

    $root;
    $innerInput;
    $list;

    constructor(){
        super();

        this.$root = this.attachShadow({ mode: 'open' });
    }

    connectedCallback(){
        this.init();
    }

    init(){
        const $style = document.createElement('style');
        $style.textContent = MyAutoCompletion.STYLE;
        this.$root.appendChild($style);

        this.$innerInput = document.createElement('input');
        this.$innerInput.classList.add('search-bar');
        this.$root.appendChild(this.$innerInput);

        this.$innerInput.addEventListener('input', e => this.handleChange(e));

        this.$list = document.createElement('ul');
        this.$list.classList.add('list-group');
        this.$root.appendChild(this.$list);
    }

    handleChange(e){
        const value = this.$innerInput.value;
        const valuelength = this.getLimitValue();
        if(this.lastSearch != value && value.length >= valuelength){
            this.updateList(value);
        }
    }

    handleSelect(patient){

        const event = new CustomEvent("select", {
            detail: {
              patient
            }
          });
          this.dispatchEvent(event);
    }

    updateList(searchTerm){
        const uri = this.getSearchURI(searchTerm);
        fetch(uri)
            .then(res => res.json())
            .then(data => this.updateFromData(data));
    }

    updateFromData(data) {
        this.$list.innerHTML = '';
        data.forEach(item => {
            const $li = document.createElement('li');
            $li.classList.add('list-group-item');
            $li.textContent = this._Format(item);
            this.$list.appendChild($li);

            $li.addEventListener('click', () => this.handleSelect(item));
        })
    }

    getSearchURI(searchTerm){
        const baseURI = this.getBaseURI();
        const field = this.getQueryField();
        return `${baseURI}?${field}=${searchTerm}`;
    }

    getBaseURI(){
        return this.getSafeAttribute('url');
    }

    getQueryField(){
        return this.getSafeAttribute('field', 'q');
    }

    getLimitValue(){
        return this.getAttribute('limit-value');
    }

    getSafeAttribute(shortName, defaultValue = ""){
        return this.hasAttribute('query-'+shortName) ? this.getAttribute('query-'+shortName) : defaultValue;
    }

    static STYLE = `
        
    .search-bar {    
    width: 56vw;
    height: 2vh;
    font-size: larger;
    border-color: #00000000;
    }
    `;


    // Overridable functions
    _Format(item){
        return item.toString();
    }
}

window.customElements.define('my-autocomplete', MyAutoCompletion);
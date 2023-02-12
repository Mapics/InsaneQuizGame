class Fonction {
    constructor() {     
        this.filter = document.querySelector(".viewFilter");
        this.currentFilter = false

        this.evenListener();
    }

    evenListener() {
        this.filterOptionsShow();
    }

    filterOptionsShow() {
        this.filter.addEventListener("click", () => {
            if(!this.currentFilter) {
                $(".filterOptions").css("visibility", "visible");
                this.currentFilter = true;
            } else {
                $(".filterOptions").css("visibility", "hidden");
                this.currentFilter = false;
            }
        })
    }
}

const fonction = new Fonction();
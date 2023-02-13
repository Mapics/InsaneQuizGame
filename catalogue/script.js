class Fonction {
    constructor() {     
        this.filter = document.querySelector(".viewFilter");
        this.currentFilter = false

        this.allQuizz = document.querySelector(".next");


        this.evenListener();
    }

    evenListener() {
        this.filterOptionsShow();
        this.allQuizzPage();
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

    allQuizzPage() {
        this.allQuizz.addEventListener("click", () => {
            location.replace("../quizz/index.php");
        })
    }
}

const fonction = new Fonction();
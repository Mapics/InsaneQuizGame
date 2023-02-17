class Fonction {
    constructor() {     
        this.filter = document.querySelector(".viewFilter");
        this.theme = document.querySelector(".themeFilter");
        this.level = document.querySelector(".levelFilter");
        this.length = document.querySelector(".lengthFilter")

        this.difficulty_indicator_1 = document.querySelector(".difficulty-indicator1");
        this.difficulty_indicator_2 = document.querySelector(".difficulty-indicator2");
        this.difficulty_indicator_3 = document.querySelector(".difficulty-indicator3");
        this.difficulty_indicator_4 = document.querySelector(".difficulty-indicator4");
        this.difficulty_indicator_5 = document.querySelector(".difficulty-indicator5");

        this.currentFilter = false;
        this.currentTheme = false;
        this.currentLevel = false;
        this.currentLength = false;

        this.currentLvlSelector = 0;


        this.allQuizz = document.querySelector(".next");
 

        this.evenListener();
    }

    evenListener() {
        this.filterOptionsShow();
        this.allQuizzPage();
        this.optionsShow();
        // this.difficultySelectorHover();
        this.difficultyIndicatorGestion();
    }

    filterOptionsShow() {
        this.filter.addEventListener("click", () => {
            if(!this.currentFilter) {
                $(".filterOptions").css("visibility", "visible");
                this.currentFilter = true;
            } else {
                $(".filterOptions").css("visibility", "hidden");
                this.currentFilter = false;
                this.currentTheme = false;
                this.currentLevel = false;
                this.currentLength = false;
            }
        })
    }

    allQuizzPage() {
        this.allQuizz.addEventListener("click", () => {
            location.replace("../quizz/index.php");
        })
    }

    optionsShow () {
        this.theme.addEventListener("click", () => {
            if(!this.currentTheme) {
                $(".themeChoice").css("visibility", "visible");
                this.currentTheme = true;
                $(".levelChoice").css("visibility", "hidden");
                this.currentLevel = false;
                $(".lengthChoice").css("visibility", "hidden");
                this.currentLength = false;
                ;
            } else {
                $(".themeChoice").css("visibility", "hidden");
                this.currentTheme = false;
            }
        });

        this.level.addEventListener("click", () => {
            if(!this.currentLevel) {
                $(".levelChoice").css("visibility", "visible");
                this.currentLevel = true;
                $(".themeChoice").css("visibility", "hidden");
                this.currentTheme = false;
                $(".lengthChoice").css("visibility", "hidden");
                this.currentLength = false;
                ;
            } else {
                $(".levelChoice").css("visibility", "hidden");
                this.currentLevel = false;
            }
        });

        this.length.addEventListener("click", () => {
            if(!this.currentLength) {
                $(".lengthChoice").css("visibility", "visible");
                this.currentLength = true;
                $(".levelChoice").css("visibility", "hidden");
                this.currentLevel = false;
                $(".themeChoice").css("visibility", "hidden");
                this.currentTheme = false;
                ;
            } else {
                $(".lengthChoice").css("visibility", "hidden");
                this.currentLength = false;
            }
        });
    }

    difficultySelectorHover() {
        if(this.currentLvlSelector === 0) {
            $(".difficulty-indicator1").hover(function() {
                console.log(this.currentLvlSelector);
                $(".difficulty-indicator1").attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            }, function() {
                $(".difficulty-indicator1").attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
            })
            
            $(".difficulty-indicator2").hover(function() {
                console.log(this.currentLvlSelector);
                for(let i = 0; i < 2; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
                }
            }, function() {
                for(let i = 0; i < 2; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
                }
            })
    
            $(".difficulty-indicator3").hover(function() {
                for(let i = 0; i < 3; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
                }
            }, function() {
                for(let i = 0; i < 3; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
                }
            })
    
            $(".difficulty-indicator4").hover(function() {
                for(let i = 0; i < 4; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
                }
            }, function() {
                for(let i = 0; i < 4; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
                }
            })
    
            $(".difficulty-indicator5").hover(function() {
                for(let i = 0; i < 5; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
                }
            }, function() {
                for(let i = 0; i < 5; i++) {
                    $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
                }
            })
        } 
    }

    difficultyIndicatorGestion() {
        $(".difficulty-indicator1").click(function() {
            $(".difficulty-indicator1").attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            for(let i = 1; i < 5; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
            }
            this.currentLvlSelector = 1;
            console.log(this.currentLvlSelector);
        })

        $(".difficulty-indicator2").click(function() {
            for(let i = 0; i < 2; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            }
            for(let i = 2; i < 5; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
            }
            this.currentLvlSelector = 2;
            console.log(this.currentLvlSelector);
        })

        $(".difficulty-indicator3").click(function() {
            for(let i = 0; i < 3; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            }
            for(let i = 3; i < 5; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
            }
            this.currentLvlSelector = 3;
            console.log(this.currentLvlSelector);
        })

        $(".difficulty-indicator4").click(function() {
            for(let i = 0; i < 4; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            }
            for(let i = 4; i < 5; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-normal.png").css("transform", "scale(1)");
            }
            this.currentLvlSelector = 4;
            console.log(this.currentLvlSelector);
        })

        $(".difficulty-indicator5").click(function() {
            for(let i = 0; i < 5; i++) {
                $(`.difficulty-indicator${i+1}`).attr("src", "../img/interrogation-yellow.png").css("transform", "scale(1.2)");
            }
            this.currentLvlSelector = 5;
            console.log(this.currentLvlSelector);
        })
    }
}

const fonction = new Fonction();
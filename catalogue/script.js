class Display {
    constructor() {
        this.loginBtn = document.querySelector(".loginBtn");
        this.registerBtn = document.querySelector(".registerBtn");
        this.backLoginPage = document.querySelector(".leavePageLogin");
        this.backRegisterPage = document.querySelector(".leavePageRegister");
        this.LoginToRegisterBtn = document.querySelector(".loginToRegisterBtn");
        this.RegisterToRegisterBtn = document.querySelector(".registerToLoginBtn");
        this.currentLoginPage = false;
        this.currentRegisterPage = false;
        this.filter = document.querySelector(".viewFilter");
        this.currentFilter = false

        this.evenListener();
    }

    evenListener() {
        this.filterOptionsShow();
        this.loginPageShow();
        this.registerPageShow();
        this.returnMainPage();
        this.swapRegisterLogin();
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

    loginPageShow() {
        this.loginBtn.addEventListener("click", () => {
            if(!this.currentLoginPage) {
                $(".popupLogin").css("visibility", "visible");
                this.currentLoginPage = true;
            }
        });
    }

    registerPageShow() {
        this.registerBtn.addEventListener("click", () => {
            if(!this.currentRegisterPage) {
                $(".popupRegister").css("visibility", "visible");
                this.currentRegisterPage = true;
            }
        });
    }

    returnMainPage() {
        this.backLoginPage.addEventListener("click", () => {
            if(this.currentLoginPage) {
                $(".popupLogin").css("visibility", "hidden");
                this.currentLoginPage = false;
            }
        });

        this.backRegisterPage.addEventListener("click", () => {
            if(this.currentRegisterPage) {
                $(".popupRegister").css("visibility", "hidden");
                this.currentRegisterPage = false;
            }
        })
    }

    swapRegisterLogin() {
        this.LoginToRegisterBtn.addEventListener("click", () => {
            console.log("OUI")
            $(".popupRegister").css("visibility", "visible");
            $(".popupLogin").css("visibility", "hidden");
            this.currentLoginPage = false;
            this.currentRegisterPage = true;

        });
        this.RegisterToRegisterBtn.addEventListener("click", () => {
            $(".popupLogin").css("visibility", "visible");
            $(".popupRegister").css("visibility", "hidden");
            this.currentRegisterPage = false;
            this.currentLoginPage = true;

        });
    }
}

const display = new Display();
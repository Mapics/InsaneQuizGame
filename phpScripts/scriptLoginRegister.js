class Display {
    constructor() {
        this.loginBtn = document.querySelector(".loginBtn");
        this.registerBtn = document.querySelector(".registerBtn");
        this.backLoginPage = document.querySelector(".leavePageLogin");
        this.backRegisterPage = document.querySelector(".leavePageRegister");
        this.LoginToRegisterBtn = document.querySelector(".loginToRegisterBtn");
        this.RegisterToRegisterBtn = document.querySelector(".registerToLoginBtn");
        this.logo = document.querySelector(".logo");
        this.currentLoginPage = false;
        this.currentRegisterPage = false;


        this.eventListener();
    }

    eventListener() {
        this.loginPageShow();
        this.registerPageShow();
        this.returnMainPage();
        this.swapRegisterLogin();
    }

    loginPageShow() {
        this.loginBtn.addEventListener("click", () => {
            if(!this.currentLoginPage) {
                $(".popupLogin").css("visibility", "visible");
                $(".viewFilter").css("z-index", "-99");
                $(".navBarre").css("z-index", "-99");
                this.currentLoginPage = true;
            }
        });
    }

    registerPageShow() {
        this.registerBtn.addEventListener("click", () => {
            if(!this.currentRegisterPage) {
                $(".popupRegister").css("visibility", "visible");
                $(".viewFilter").css("z-index", "-99");
                $(".navBarre").css("z-index", "-99");
                this.currentRegisterPage = true;
            }
        });
    }

    returnMainPage() {
        this.backLoginPage.addEventListener("click", () => {
            if(this.currentLoginPage) {
                $(".popupLogin").css("visibility", "hidden");
                $(".viewFilter").css("z-index", "99");
                $(".navBarre").css("z-index", "99");
                this.currentLoginPage = false;
            }
        });

        this.backRegisterPage.addEventListener("click", () => {
            if(this.currentRegisterPage) {
                $(".popupRegister").css("visibility", "hidden");
                $(".viewFilter").css("z-index", "99");
                $(".navBarre").css("z-index", "99");
                this.currentRegisterPage = false;
            }
        })

        this.logo.addEventListener("click", () => {
            location.replace("../Quizzeo/index.php");           
        });
    }

    swapRegisterLogin() {
        this.LoginToRegisterBtn.addEventListener("click", () => {
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

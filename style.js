const form = document.getElementById("contactForm");

form.addEventListener("submit", function (e) {

    const name = document.getElementById("name").value.trim();
    const companyName = document.getElementById("companyName").value.trim();
    const email = document.getElementById("email").value.trim();
    const age = document.getElementById("age").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !companyName || !email || !age || !message) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        e.preventDefault();
        return;
    }

    const confirmMessage =
        "下記の内容を本当に送信しますか？\n\n" +
        "お名前： " + name + "\n" +
        "会社名： " + companyName + "\n" +
        "メールアドレス： " + email + "\n" +
        "年齢： " + age + "\n" +
        "お問い合わせ内容： " + message;

    const result = confirm(confirmMessage);

    if(!result){
        e.preventDefault();
    }
});

const colorButton = document.getElementById("colorButton");
const footer = document.getElementById("footer");

const colors = ["blue", "red", "yellow", "gray"];
let currentIndex = 0;

colorButton.addEventListener("click", function () {
    footer.style.backgroundColor = colors[currentIndex];
    currentIndex = (currentIndex + 1) % colors.length;
});
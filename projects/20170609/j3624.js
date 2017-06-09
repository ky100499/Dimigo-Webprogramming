function subject(cho) {
    var ans = confirm(cho);
    if (ans) {
        return "확인";
    } else {
        return "취소";
    }
}

var choice;
choice = subject("확인 또는 취소 선택");
document.write(choice);

function msg() {
    alert("이벤트 발생");
}

function a() {
    window.open("about:blank", "win_o", "width=300 height=300 status=no");
}

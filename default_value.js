function defaultchecked() {
    var checkBox = document.getElementById("default-check");
    var n = Number(document.getElementById("number").value);
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        //set default values
        for (let i = 0; i < n; i++) {
            for (let j = 0; j < n; j++) {
                document.getElementById(`x${i}${j}`).value = 0;
            }
        }
        for (let w = 0; w < n; w++) {
            document.getElementById(`x${w}${w}`).value = 4;
            document.getElementById(`g${w}`).value = 1;
            document.getElementById(`x${w+1}${w}`).value = -1;
            document.getElementById(`x${w}${w+1}`).value = -1;
        }

    } else {
        for (let i = 0; i < n; i++) {
            for (let j = 0; j < n; j++) {
                document.getElementById(`x${i}${j}`).value = null
            }
            document.getElementById(`g${i}`).value = null
        }
    }
}
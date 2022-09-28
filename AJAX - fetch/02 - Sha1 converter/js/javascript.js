let node = document.querySelector("input");

node.onkeyup = () => {
    console.log(node.value);

    let formData = new FormData();
    formData.append("text",node.value);

    fetch("ajax.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // prend le JSON, transforme en structure native JS
    .then(result => {
        let parent = document.querySelector("#result");
        let node = document.createElement("div");
        node.innerHTML = result;

        parent.append(node);
    })
}
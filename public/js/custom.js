let phonecreate = (el) => {
    let formData = new FormData();
    formData.append('contact_id', document.getElementById('id').value);
    formData.append('phone', document.getElementById('phone').value);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('phone').readOnly = true;
            document.getElementById('phone').name = "";
            document.getElementById('phone').id = "";
            let input = document.createElement("input");
            input.type = "number";
            input.className = "form-control-file";
            input.name = 'phone';
            input.id = 'phone';
            input.setAttribute('onchange', 'phonecreate(this)');
            form = document.getElementById('form');
            form.appendChild(input);

        }
    };
    xhr.open('POST', '/phone/create', true);
    xhr.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').content);

    xhr.onload = function (e) {
    };
    xhr.send(formData);
};







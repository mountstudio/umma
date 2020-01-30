let parent_select = $("#parent_category");
var elements = [];
elements.push(parent_select);
getCategory(parent_select);

function getCategory(id) {
    id.change(e => {
        let id_parent = $(e.currentTarget).val();
        let isToDelete = false;
        elements.forEach(function (item) {
            if (isToDelete) {
                item.remove();
                console.log("remove");
            }
            console.log(id.val(), item.val(), 'вошел');
            if (id.val() === item.val()) {
                isToDelete = true;
                console.log("compare");
            }
        });
        elements.forEach(function (item, index, object) {
            if (id.val() === item.val()) {
                console.log(item);
                object.splice(index + 1, object.length);
                console.log('remove from array')
            }
        });
        console.log(elements);
        $.ajax({
            url: "/articles/category/" + id_parent,
            dataType: 'json',
            type: "GET",
            success: function (data) {
                if (isEmpty(data)) {
                    return;
                }
                let subSelect = document.createElement("select");
                subSelect.id = "select" + id_parent;
                let option = document.createElement("option");
                option.text = "Выберите категорию";
                option.value = "0";
                subSelect.appendChild(option);
                for (let index in data) {
                    let option = document.createElement("option");
                    option.value = data[index].id;
                    option.text = data[index].name;
                    subSelect.appendChild(option)
                }
                document.getElementById("categories").appendChild(subSelect);
                elements.push(($("#select" + id_parent)));
                getCategory($("#select" + id_parent));
            },
            error: {}
        })
    });
}

function isEmpty(obj) {
    for (let key in obj) {
        if (obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
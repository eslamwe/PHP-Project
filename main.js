$(".btnedit").click(e =>{
    let textvalues = displayData(e);
    console.log(textvalues);

    let id = $("input[name*='book_id']");
    let bookName = $("input[name*='book_name']");
    let bookPublisher = $("input[name*='book_publisher']");
    let bookPrice = $("input[name*='book_price']");

    id.val(textvalues[0]);
    bookName.val(textvalues[1]);
    bookPublisher.val(textvalues[2]);
    bookPrice.val(textvalues[3].replace('$',''));
    });

function displayData(e){
    let id = 0;
    let td = $("tbody tr td").get();
    let textvalues = [];



    for (const value of td) {
        if (value.dataset.id === e.target.dataset.id){
          textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}
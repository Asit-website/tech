//graps the news container
let source = 'bbc-news';
let apiKey = 'afc11dd4758f4e38ae3bcc4af54fe9f5'
let newsa = document.getElementById('newsa');
// craete an ajax get request
const xhr = new XMLHttpRequest();
xhr.open('GET', `https://newsapi.org/v2/top-headlines?sources=${source}&apiKey=${apiKey}`, true);

xhr.onload = function () {
    if (this.status === 200) {
        let json = JSON.parse(this.responseText);
        console.log(json);

        let articles = json.articles;
        //  console.log(articals);
        let newsHtml="";
        articles.forEach(function(element,index) {
            let news = `<div class="card col-md-10 d-block m-auto">
    <div class="card-header text-light" id="heading${index}">
        <h2 class="mb-0">
            <button style=" color:red ; text-decoration:none ;" class="btn btn-link  collapsed show  btn-block text-left" type="button" data-toggle="collapse"
                data-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
               ${index+1}  ${element["title"]}
            </button>
        </h2>
    </div>

    <div id="collapse${index}" class="collapse show " aria-labelledby="heading${index}"
        data-parent="#newsa">
        <div class="card-body"> ${element["content"]}. <a target="_blank" style="text-decoration:none ; color:#a60000 ;" href="${element['url']}"> Read More </a></div>
    </div>
</div>`
         newsHtml+=news;
        });
        newsa.innerHTML=newsHtml;
    }

    else {
        console.log("some error occured");
    }
}
xhr.send();





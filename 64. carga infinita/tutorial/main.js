let block = false;
let page = 0;

window.onload = async function(){
    // cargar items
    loadItems();
}

window.addEventListener("scroll", async function(event) {
    const scrollHeight = this.scrollY;
    const viewportHeight = document.documentElement.clientHeight;
    const moreScroll = document.getElementById('more-tuits').offsetTop;
    const currentScroll = scrollHeight + viewportHeight;

    if((currentScroll >= moreScroll) && block === false){ //cargar más contenido
        block = true;

        this.setTimeout(() =>{
            loadItems();

            block = false;
        }, 2000);
    }
});

async function loadItems(){
    const data = await requestData(page);
    const response = data[0];

    if(response.response === '200'){
        const items = data[1];
        page = data[2].page;

        renderItems(items);
    }else if(response.response === '400'){
        console.error('No hay más tuits');
    }
}

function requestData(n){
    const url = 'http://localhost/curso/64.%20carga%20infinita/tutorial/api.php?action=more&page=' + n;

    const response = this.fetch(url)
    .then(res => res.json())
    .then(data => data)

    return response;
}

function renderItems(data){
    let tuits = document.querySelector('#tuits');
    data.forEach(element => {
        tuits.innerHTML += `
            <div class="tuit">
                <div class="profile">
                    <img src="img/${element.username_photo}" alt="">
                </div>
                <div class="content">
                    <div class="author">
                        <span class="name">${element.name}</span>
                        <span class="username">@${element.username}</span>
                    </div>
                    <div class="text">
                    ${element.text}
                    </div>
                    <div class="image">
                        <img src="img/${element.image}"  alt="">
                    </div>
                </div>
            </div>
        `;
    });
}
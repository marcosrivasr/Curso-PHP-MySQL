
const btnCategory = document.querySelector('#new-category');

btnCategory.addEventListener('click', async e =>{
  const background      = document.createElement('div');
  const panel           = document.createElement('div');
  const titlebar        = document.createElement('div');
  const closeButton     = document.createElement('a');
  const closeButtonText = document.createElement('i');
  const ajaxcontent     = document.createElement('div');


  background.setAttribute('id', 'background-container');
  panel.setAttribute('id', 'panel-container');
  titlebar.setAttribute('id', 'title-bar-container');
  closeButton.setAttribute('class', 'close-button');
  //closeButton.setAttribute('href', '#');
  closeButtonText.setAttribute('class', 'material-icons');
  ajaxcontent.setAttribute('id', 'ajax-content');

  background.appendChild(panel);
  panel.appendChild(titlebar);
  panel.appendChild(ajaxcontent);
  titlebar.appendChild(closeButton);
  closeButton.appendChild(closeButtonText);
  closeButtonText.appendChild(document.createTextNode('close'));
  document.querySelector('#main-container').appendChild(background);

  closeButton.addEventListener('click', e =>{
    background.remove();
  });

  
  const html = await getContent();
  ajaxcontent.innerHTML+= html;
  
});

async function getContent(){
  const html = await fetch('http://localhost:8080/expense-app/admin/createCategory').then(res => res.text());
  return html;
}

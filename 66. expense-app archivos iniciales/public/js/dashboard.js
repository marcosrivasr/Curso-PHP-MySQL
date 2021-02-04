
const btnExpense = document.querySelector('#new-expense');

btnExpense.addEventListener('click', async e =>{
  const background = document.createElement('div');
  const panel = document.createElement('div');
  const titlebar = document.createElement('div');
  const closeButton = document.createElement('a');
  const closeButtonText = document.createElement('i');
  const ajaxcontent = document.createElement('div');


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
  const html = await fetch('http://localhost:8080/expense-app/expenses/create').then(res => res.text());
  return html;
}

google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      async function drawChart() {
        const http = await fetch('http://localhost:8080/expense-app/expenses/getExpensesJSON')
        .then(json => json.json())
        .then(res => res);

        let expenses = [...http];
        expenses.shift();
        console.log(expenses);

        let colors = [...http][0];
        colors.shift();
        

        var data = google.visualization.arrayToDataTable(expenses);

        var options = {
          colors: colors
        };

        var chart = new google.charts.Bar(document.getElementById('chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
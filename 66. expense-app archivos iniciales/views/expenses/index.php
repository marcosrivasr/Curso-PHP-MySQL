
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/history.css">
    <?php require_once 'views/dashboard/header.php'; ?>

    <div id="main-container">
    
        <div id="history-container" class="container">
            
            <div id="history-options">
                <h2>Historial de gastos</h2>
                <div id="filters-container">
                    <div class="filter-container">
                        <select id="sdate" class="custom-select">
                            <option value="">Ver todas las fechas</option>
                            
                        </select>
                    </div>

                    <div class="filter-container">
                        <select id="scategory" class="custom-select">
                            <option value="">Ver todas las categorias</option>
                            
                        </select>
                    </div>
                </div>   
            </div>
            
            <div id="table-container">
                <table width="100%" cellpadding="0">
                    <thead>
                        <tr>
                        <th data-sort="title" width="35%">Título</th>
                        <th data-sort="category">Categoría</th>
                        <th data-sort="date">Fecha</th>
                        <th data-sort="amount">Cantidad</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="databody">
                        
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>

    <script>
        var data = [];
        var copydata = [];
        const sdate     = document.querySelector('#sdate');
        const scategory = document.querySelector('#scategory');
        const sorts = document.querySelectorAll('th');

        sdate.addEventListener('change', e =>{
            const value = e.target.value;
            if(value === '' || value === null){
                this.copydata = [...this.data];
                checkForFilters(scategory);
                //renderData(this.copydata);
                return;
            }
            filterByDate(value);
        });

        scategory.addEventListener('change', e =>{
            const value = e.target.value;
            if(value === '' || value === null){
                this.copydata = [...this.data];
                checkForFilters(sdate);
                //renderData(this.copydata);
                return;
            }
            filterByCategory(value);
        });

        function checkForFilters(object){
            if(object.value != ''){
                //console.log('hay un filtro de ' + object.id);
                switch(object.id){
                    case 'sdate':
                        filterByDate(object.value);
                    break;  

                    case 'scategory':
                        filterByCategory(object.value);
                    break;
                    default:
                }
            }else{
                this.datacopy = [...this.data]; 
                renderData(this.datacopy);
            }
        }

        sorts.forEach(item =>{
            item.addEventListener('click', e =>{
                if(item.dataset.sort){  
                        sortBy(item.dataset.sort);        
                }
            });
        });

        function sortBy(name){
            this.copydata = [...this.data];
            let res;
            switch(name){
                case 'title':
                    res = this.copydata.sort(compareTitle);
                break;
                    
                case 'category':
                    res = this.copydata.sort(compareCategory);
                    break;

                case 'date':
                    res = this.copydata.sort(compareDate);
                    break;
                        
                case 'amount':
                    res = this.copydata.sort(compareAmount);
                    break;

                    default:
                    res = this.copydata;
            }

            renderData(res);
        }

        function compareTitle(a, b){
            if(a.expense_title.toLowerCase() > b.expense_title.toLowerCase()) return 1;
            if(b.expense_title.toLowerCase() > a.expense_title.toLowerCase()) return -1;
            return 0;
        }
        function compareCategory(a, b){
            if(a.category_name.toLowerCase() > b.category_name.toLowerCase()) return 1;
            if(b.category_name.toLowerCase() > a.category_name.toLowerCase()) return -1;
            return 0;
        }
        function compareAmount(a, b){
            if(a.amount > b.amount) return 1;
            if(b.amount > a.amount) return -1;
            return 0;
        }
        function compareDate(a, b){
            if(a.date > b.date) return 1;
            if(b.date > a.date) return -1;
            return 0;
        }

        function filterByDate(value){
            this.copydata = [...this.data];
            const res = this.copydata.filter(item =>{
                return value == item.date.substr(0, 7);
            });
            this.copydata = [...res];
            renderData(res);
        }

        function filterByCategory(value){
            this.copydata = [...this.data];
            const res = this.copydata.filter(item =>{
                return value == item.name;
            });
            this.copydata = [...res];
            renderData(res);
        }

        async function getData(){
            data = await fetch('http://localhost:8080/expense-app/expenses/getHistoryJSON')
            .then(res =>res.json())
            .then(json => json);
            this.copydata = [...this.data];
            console.table(data);
            renderData(data);
        }
        getData();

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function renderData(data){
            var databody = document.querySelector('#databody');
            let total = 0;
            databody.innerHTML = '';
            data.forEach(item => { 
                //total += item.amount;
                databody.innerHTML += `<tr>
                        <td>${item.title}</td>
                        <td><span class="category" style="background-color: ${item.color}">${item.name}</span></td>
                        <td>${item.date}</td>
                        <td>$${item.amount}</td>
                        <td><a href="http://localhost:8080/expense-app/expenses/delete/${item.id}">Eliminar</a></td>
                    </tr>`;
            });
        }
        

        
    </script>
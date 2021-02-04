
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Expense App - Dashboard</title>
    
</head>
<body>
    <?php require 'header.php'; ?>

    <div id="main-container">
            
        <div id="expenses-container">
        
            <div id="left-container">
                <h2>Resumen</h2>
                <div id="expenses-summary">
                    <div class="card w-50">
                        <div class="total-expense">
                            
                            
                        </div>
                        <div class="total-budget">
                            de <span class="total-budget-text">
                                $
                            </span>
                        </div>
                    </div>
                </div>

                <div id="columnchart_material">
                </div>

                <div id="expenses-category">
                    <h3>Gastos del mes por categoria</h3>
                    <div id="categories-container">
                            <div class="card ws-30">
                                <div class="category-total">
                                    $  
                                </div>
                                <div class="category-name">
                                    
                                </div>
                            </div>
                    
                    </div>
                </div>
            </div>

            <div id="right-container">
                <div id="expenses-transactions">
                    <section>
                        <h2>Operaciones</h2>  
                        
                        <button class="btn-main" id="new-expense">
                            <i class="material-icons">add</i>
                            <span>Registrar nuevo gasto</span>
                        </button>
                        <a href="user#budget-user-container" class="secondary">Definir presupuesto</a>
                    </section>

                    <section>
                    <h2>Últimos gastos</h2>
                    
                    </section>
                </div>
            </div>
            

        </div>

    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="public/js/dashboard.js"></script>
    
</body>
</html>
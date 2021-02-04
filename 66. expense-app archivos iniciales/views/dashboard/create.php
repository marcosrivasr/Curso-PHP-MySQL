<link rel="stylesheet" href="public/css/expense.css">
<form id="form-expense-container" action="expenses/newExpense" method="POST">
    <h3>Registrar nuevo gasto</h3>
    <div class="section">
        <label for="amount">Cantidad</label>
        <input type="number" name="amount" id="amount" autocomplete="off" required>
    </div>
    <div class="section">
        <label for="title">Descripción</label>
        <div><input type="text" name="title" autocomplete="off" required></div>
    </div>
    
    <div class="section">
        <label for="date">Fecha de gasto</label>
        <input type="date" name="date" id="" required>
    </div>    

    <div class="section">
        <label for="categoria">Categoria</label>
            <select name="category" id="" required>

            </select>
    </div>    

    <div class="center">
        <input type="submit" value="Nuevo expense">
    </div>
</form>
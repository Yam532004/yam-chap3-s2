
<form action="process.php" method="post" >
    
    <div class="mb-3">
    <input type="checkbox" class="form-control-check" id="html" value="HTML" name ="languages[]">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" value="CSS" name ="languages[]">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" value="JavaScript" name ="languages[]">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" value="PHP" name ="languages[]">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>
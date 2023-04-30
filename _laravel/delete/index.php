   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
   <form method="post">
   <label for="brand">Select brand:</label>
   <select id="brand" name="brand">
      <option value="Brand A"><p>Brand A</p></option>
      <option value="Brand B"><p>Brand B</p></option>
      <option value="Brand C"><p>Brand C</p></option>
   </select>

   <br>

   <label for="date">Select date:</label>
   <select id="date" name="date">
      <option value="2020-01-01"><p>2020-01-01</p></option>
      <option value="2020-02-01"><p>2020-02-01</p></option>
      <option value="2020-03-01"><p>2020-03-01</p></option>
   </select>

   <br>

   <button type="submit" name="submit">Filter</button>
   </form>

   <?php
      if (isset($_POST['submit'])) {
         // Retrieve user selections from form
         $selectedBrand = $_POST['brand'];
         $selectedDate = $_POST['date'];
      
         // Construct SQL query to filter cars
         $query = "SELECT * FROM cars WHERE brand = :brand AND release_date = :date";
         $stmt = $pdo->prepare($query);
         $stmt->execute(['brand' => $selectedBrand, 'date' => $selectedDate]);
         $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
         // Display filtered results to user
         foreach ($cars as $car) {
         echo "Brand: " . $car['brand'] . "<br>";
         echo "Release date: " . $car['release_date'] . "<br>";
         // display other car information
         }
      }
   ?>
   </body>
   </html>
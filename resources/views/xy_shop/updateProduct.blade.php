<!DOCTYPE html>
<html>
<head><title>product update</title>
<link rel="stylesheet" href=" {{ asset('css/update.css') }} ">
</head>
<body>
<form action="/update/<?php echo $products[0]->id; ?>" method="post">
<p>Update product</p>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<label for="productCode">Enter new product code</label>
<input type='text' name='productCode' value='<?php echo $products[0]->productCode;?>'/>
<label for="productName">Enter new product name</label>
<input type='text' name='productName' value='<?php echo $products[0]->productName;?>'/>
<button type='submit' value="Update product">Update product</button>
</table>
</form>
</body>
</html>

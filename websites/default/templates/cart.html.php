<div class="row justify-content-around p-5">
<h1> Your Shopping Cart </h1>
</div>
<table class="table">
  <tbody>
		<!--start list-->
		<tr>
        <th scope="col">
          {@name}
        </th>
        <th scope="col">
          {@quantity}
        </th>
        <th>
          <a class="ml-5" href="?route=payment&action=remove&jobid={@jobid}" title="REMOVE ITEMS">
          <i class="fa fa-trash"></i>
          </a>
        </th>
    </tr>
    <tr>
        <th scope="col">
          {@name}
        </th>
        <th scope="col">
          {@quantity}
        </th>
        <th>
          <a class="ml-5" href="?route=payment&action=remove&jobid={@jobid}" title="REMOVE ITEMS">
          <i class="fa fa-trash"></i>
          </a>
        </th>
    </tr>
<!--end list-->
<tr>
<th scope="col">
  <h5>
  TOTAL QTY is

  {@total_quantity}
  </h5>
</th>
<th scope="col">
<h5>
  TOTAL PRICE  is
</h5>
<div class="price ml-5">
   £{@total_price}
</div>
</th>
</tr>
</tbody>
</table>
<div class="row justify-content-around p-5">
	<button class="md-form btn btn-dark" type="submit" formaction="/checkout_page">CHECKOUT</button>
</div>

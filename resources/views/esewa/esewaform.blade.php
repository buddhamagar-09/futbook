<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to eSewa</title>
</head>

<body>

    

    <form id="esewaForm"
          action="{{ config('esewa.payment_url') }}"
          method="POST">

        <input type="hidden"
               name="amount"
               value="{{ $amount }}">

        <input type="hidden"
               name="tax_amount"
               value="0">

        <input type="hidden"
               name="total_amount"
               value="{{ $amount }}">

        <input type="hidden"
               name="transaction_uuid"
               value="{{ $transactionUuid }}">

        <input type="hidden"
               name="product_code"
               value="{{ $productCode }}">

        <input type="hidden"
               name="product_service_charge"
               value="0">

        <input type="hidden"
               name="product_delivery_charge"
               value="0">

        <input type="hidden"
               name="success_url"
               value="{{ config('esewa.success_url') }}">

        <input type="hidden"
               name="failure_url"
               value="{{ config('esewa.failure_url') }}">

        <input type="hidden"
               name="signed_field_names"
               value="{{ $signedFieldNames }}">

        <input type="hidden"
               name="signature"
               value="{{ $signature }}">

    </form>

    <script>
        document.getElementById('esewaForm').submit();
    </script>

</body>
</html>
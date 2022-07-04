<!-- ngeload template web + navbar -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- disini nempatin isi atau content nya -->
<form action="/order/buy"method='POST'>
    <?php if(isset($validation)): ?>
    <ul>
        <?= $validation->listErrors(); ?>
    </ul>
        <?php endif; ?>
    <ul>
    <?php foreach ($orderProceed as $index=>$order) : ?>
        <input type="hidden" name="key_<?= $order; ?>" id="key_<?= $order; ?>" value="<?= $order; ?>">
        <div>
            <h2><?= $purchased[$index]['product_name']; ?></h2>
           <li>qty: <?= $purchased[$index]['qty']; ?></li>
           <li>total: IDR <?=number_format($purchased[$index]['qty_times_price'],0,',','.') ; ?></li>
        </div>
    <?php endforeach; ?>
    <h2>Total Payment</h2>
    <div>
        <ul>
            <li>Sub total product : IDR <?= number_format($total,0,',','.'); ?></li>
            <li>Delivery fee : IDR <?= number_format(50000,0,',','.'); ?></li>
            <li>Total : <?= number_format($total+=50000,0,',','.'); ?></li>
        </ul>
    </div>
    </ul>
    <?php foreach ($payment as $pym) : ?>
        <div>
            <label for="payment"><?= $pym['payment_name']; ?></label>
            <input type="radio" name="payment" id="payment" value="<?= $pym['payment_id']; ?>" >
        </div>
    <?php endforeach ?>
    <button type="submit" name="submit" >Buy</button>
</form>
<?= $this->endSection(); ?>
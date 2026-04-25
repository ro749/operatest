@push('scripts')
<script>
    $(document).data('no_auto_update_personalized', true);
    $(document).on('personalized_plan_changed', function (e, final_price) {
        var interes_mensual = .013;
        var per_enganche = $('#per_enganche').get_number();
        var per_plazo = $('#per_plazo').get_number();
        var per_liquidacion = $('#per_liquidacion').get_number();
        var mensualidades_plazo = $('#fill_months_plazo').get_number();
        

        var monto_a_financiar = final_price * per_plazo / 100;
        var pago_manual = monto_a_financiar / ((1-Math.pow(1+interes_mensual,-mensualidades_plazo))/interes_mensual);
        var pago_total = pago_manual * mensualidades_plazo;
        var costo_financiero = pago_total - monto_a_financiar;
        
        var monto_nominal = per_liquidacion * final_price / 100;
        var tasa_efectiva_anualizada = Math.pow(1+interes_mensual, 12) - 1;
        var plazo_anualizado = mensualidades_plazo / 12;
        var pago_final = monto_nominal * Math.pow(1 + tasa_efectiva_anualizada, plazo_anualizado);

        var enganche = final_price * per_enganche / 100;
        var pago = enganche + pago_total + pago_final;
        $('#fill_enganche').set_value(per_enganche*pago/100);
        $('#fill_plazo').set_value(per_plazo*pago/100);
        $('#fill_liquidacion').set_money(per_liquidacion*pago/100);
        $('#per_liquidacion').set_percent(100-per_plazo-per_enganche);
        
    });
</script>
@endpush
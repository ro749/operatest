@push('scripts')
<script>
    $(document).data('no_auto_update_personalized', true);
    $(document).on('personalized_plan_changed', function (e, final_price) {
        var interes_mensual = .013;
        var mensualidades_plazo = $('#fill_months_plazo').get_number();
        if(!mensualidades_plazo){
            mensualidades_plazo = 1;
        }
        if($('#fill_enganche').data('flag')){
            var per_plazo = $('#per_plazo').get_number();
            var enganche = $('#fill_enganche').get_number();
            var per_enganche = calculateX(
                mensualidades_plazo,
                per_plazo/100, 
                final_price, 
                enganche
            );
            var monto_a_financiar = final_price * per_plazo / 100;
            var pago_manual = monto_a_financiar / ((1-Math.pow(1+interes_mensual,-mensualidades_plazo))/interes_mensual);
            var pago_total = pago_manual * mensualidades_plazo;
            var costo_financiero = pago_total - monto_a_financiar;
            var per_liquidacion = 100-per_plazo-per_enganche;
            var monto_nominal = per_liquidacion * final_price / 100;
            var tasa_efectiva_anualizada = Math.pow(1+interes_mensual, 12) - 1;
            var plazo_anualizado = mensualidades_plazo / 12;
            var pago_final = monto_nominal * Math.pow(1 + tasa_efectiva_anualizada, plazo_anualizado);
            var enganche = final_price * per_enganche / 100;
            var pago = enganche + pago_total + pago_final;
            $('#per_enganche').set_value(per_enganche*100);
            $('#fill_plazo').set_value(per_plazo*pago/100);
        }
        else if($('#fill_plazo').data('flag')){
            var per_enganche = $('#per_enganche').get_number();
            var plazo = $('#fill_plazo').get_number();
            var per_plazo = calculateY(
                mensualidades_plazo,
                per_enganche/100, 
                final_price, 
                plazo
            );
            var monto_a_financiar = final_price * per_plazo / 100;
            var pago_manual = monto_a_financiar / ((1-Math.pow(1+interes_mensual,-mensualidades_plazo))/interes_mensual);
            var pago_total = pago_manual * mensualidades_plazo;
            var costo_financiero = pago_total - monto_a_financiar;
            var per_liquidacion = 100-per_plazo-per_enganche;

            var monto_nominal = per_liquidacion * final_price / 100;
            var tasa_efectiva_anualizada = Math.pow(1+interes_mensual, 12) - 1;
            var plazo_anualizado = mensualidades_plazo / 12;
            var pago_final = monto_nominal * Math.pow(1 + tasa_efectiva_anualizada, plazo_anualizado);
            var enganche = final_price * per_enganche / 100;
            var pago = enganche + pago_total + pago_final;
            $('#per_plazo').set_value(per_plazo*100);
            $('#fill_enganche').set_value(per_enganche*pago/100);
        }
        else{
            var per_enganche = $('#per_enganche').get_number();
            var per_plazo = $('#per_plazo').get_number();
            
            var monto_a_financiar = final_price * per_plazo / 100;
            var pago_manual = monto_a_financiar / ((1-Math.pow(1+interes_mensual,-mensualidades_plazo))/interes_mensual);
            var pago_total = pago_manual * mensualidades_plazo;
            var costo_financiero = pago_total - monto_a_financiar;
            var per_liquidacion = 100-per_plazo-per_enganche;

            var monto_nominal = per_liquidacion * final_price / 100;
            var tasa_efectiva_anualizada = Math.pow(1+interes_mensual, 12) - 1;
            var plazo_anualizado = mensualidades_plazo / 12;
            var pago_final = monto_nominal * Math.pow(1 + tasa_efectiva_anualizada, plazo_anualizado);
            var enganche = final_price * per_enganche / 100;
            var pago = enganche + pago_total + pago_final;
            $('#fill_enganche').set_value(per_enganche*pago/100);
            $('#fill_plazo').set_value(per_plazo*pago/100);
        }
        
        
        $('#per_liquidacion').set_percent(per_liquidacion);
        $('#fill_liquidacion').set_money(per_liquidacion*pago/100);
        $('#fill_mensuality_plazo').set_money($('#fill_plazo').get_number()/mensualidades_plazo);
        $('#fill_total-price-personalized').set_money(pago);

    });

    function calculateX(w,y, z, L) {
      const value_normalized = L/z;
      const B = Math.pow(1.013,w);
      const A = y*0.013/(1-Math.pow(1.013,-w))*w;
      const a = 1-B;
      const b = A+B-y*B;
      const root = Math.sqrt(b**2+4*a*value_normalized);
      return (-b+root)/(2*a)
    }
    function calculateY(w,x,z,L){
      const value_normalized = L/z;
      const B = Math.pow(1.013,w);
      const A = 0.013/(1-Math.pow(1.013,-w))*w;
      const a = -B+A;
      const b = x+B-x*B;
      const root = Math.sqrt(b**2+4*a*value_normalized);
      return (-b+root)/(2*a)
    }
</script>
@endpush
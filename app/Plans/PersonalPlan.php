<?php

namespace App\Plans;

use Ro749\ListingUtils\Plans\PersonalPlan as BasePersonalPlan;
use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\ListingUtils\Plans\Personalized\PlanLine;
use Ro749\SharedUtils\Forms\Field;
use Ro749\SharedUtils\Forms\InputType;
class PersonalPlan extends BasePersonalPlan{

    public function __construct(
        BaseForm $form,
        string $id = 'personal',
        string $title = 'Personalizado',
        float|string $discount = 0,
        array $top_lines = [],
        array $lines = [],
        array $bottom_lines = [],
        string $price_tag = 'Precio de lista',
        string $discount_tag = 'Descuento',
        string $total_tag = 'Total',
        string $ppm_tag = 'Precio por metro',
        bool $total_on_top = false,
        bool $ppm = false,
        bool $show_base_price = true,
        string $enganche_tag = 'Enganche',
        string $plazo_tag = 'Plazo',
        string $liquidacion_tag = 'Liquidación a la firma',
        string $autofill = 'liquidacion',
        array $lines_for_fill = ['enganche', 'plazo'],
    ){
        parent::__construct($form,$id, $title, $discount, $top_lines, $lines, $bottom_lines, $price_tag, $discount_tag, $total_tag, $ppm_tag, $total_on_top, $ppm, $show_base_price);
        array_shift($this->top_lines);
        array_shift($this->lines);
        $this->lines[] = new PlanLine(
            text: 'Interes Mensual',
            id: 'interes_mensual',
            classes: ['interes_mensual'],
            amount: new Field(
                type: InputType::PERCENTAGE,
            ),
        );
        $this->lines[] = new PlanLine(
            text: 'Meses sin intereses',
            id: 'meses_sin_intereses',
            classes: ['meses_sin_intereses'],
            amount: new Field(
                type: InputType::NUMBER,
            ),
        );
    }
}
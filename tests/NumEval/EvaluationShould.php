<?php

namespace Tests\NumEval;

use NumEval\evaluation;

class EvaluationShould extends BaseTestClass {
    /** @test */
    public function compute_pi() {
        $evaluation = new evaluation();
        $result = $evaluation->trigonometry->compute_pi(4);

        $this->assertEquals(
            '3|154084834456405157341652385/1088199945586205657083492425',
            $evaluation->result_value($result));
    }
}

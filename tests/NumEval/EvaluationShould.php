<?php

namespace Tests\NumEval;

use NumEval\Evaluation;

class EvaluationShould extends BaseTestClass {
    /** @test */
    public function compute_pi() {
        $evaluation = new Evaluation();
        $result = $evaluation->trigonometry->compute_pi(4);

        $this->assertEquals(
            '3|154084834456405157341652385/1088199945586205657083492425',
            $evaluation->result_value($result));
    }

    /** @test */
    public function compute_arctan() {
        $evaluation = new Evaluation();
        $result = $evaluation->trigonometry->arctan(1,10);

        // arctan(1) = 0.78539816
        // result: 0|-156/945 = 0,1650793650793651

        $this->assertEquals(
            '3|154084834456405157341652385/1088199945586205657083492425',
            $evaluation->result_value($result));
    }
}

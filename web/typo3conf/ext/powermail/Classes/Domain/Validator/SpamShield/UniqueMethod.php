<?php
namespace In2code\Powermail\Domain\Validator\SpamShield;

/**
 * Class UniqueMethod
 * @package In2code\Powermail\Domain\Validator\SpamShield
 */
class UniqueMethod extends AbstractMethod
{

    /**
     * Unique Check: Checks if values in given params are different
     *
     * @return bool true if spam recognized
     */
    public function spamCheck()
    {
        $answers = [];
        foreach ($this->mail->getAnswers() as $answer) {
            if (!is_array($answer->getValue()) && $answer->getValue()) {
                $answers[] = $answer->getValue();
            }
        }
        return count($answers) !== count(array_unique($answers));
    }
}

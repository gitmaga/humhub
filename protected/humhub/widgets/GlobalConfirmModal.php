<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\widgets;

/**
 * GlobalConfirmModal used as template for humhub.ui.modal.confirm actions.
 *
 * @see LayoutAddons
 * @author buddha
 * @since 1.2
 */
class GlobalConfirmModal extends \yii\base\Widget
{

    /**
     * @inheritdoc
     */
    public function run()
    {
        return \humhub\widgets\Modal::widget([
            'id' => 'globalModalConfirm',
            'size' => 'extra-small',
            'centerText' => true,
            'backdrop' => false,
            'keyboard' => false,
            'animation' => 'pulse',
            'footer' => '<button data-modal-cancel data-modal-close class="btn btn-primary"></button><button data-modal-confirm data-modal-close class="btn btn-primary"></button>'
        ]);
    }

}

<?php
/**
 * This file is part of the vardius/crud-bundle package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vardius\Bundle\CrudBundle\Actions\Action;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * AddAction
 *
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class AddAction extends SaveAction
{
    /**
     * Rest response success action code
     */
    CONST ACTION_CODE = 201;

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefault('methods', function (Options $options, array $previousValue) {
            return $options['rest_route'] ? ['POST'] : $previousValue;
        });

        $resolver->setDefault('pattern', function (Options $options) {
            return $options['rest_route'] ? '.{_format}' : '/add.{_format}';
        });

        $resolver->setDefault('defaults', function (Options $options) {
            $format = $options['rest_route'] ? 'json' : 'html';

            return [
                '_format' => $format
            ];
        });
    }
}

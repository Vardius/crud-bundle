<?php
/**
 * This file is part of the vardius/crud-bundle package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vardius\Bundle\CrudBundle\Data;


/**
 * DataProviderInterface
 *
 * @author Rafał Lorenz <vardius@gmail.com>
 */
interface DataProviderInterface
{
    /**
     * Returns data item by id
     *
     * @param null $id
     * @return mixed
     */
    public function get($id = null);

    /**
     * Returns source of data
     *
     * @return mixed
     */
    public function getSource();

    /**
     * Creates new element in data source
     * @return mixed
     */
    public function create();

    /**
     * Removes the element from data source by id
     *
     * @param $id
     * @return mixed
     */
    public function remove($id);

    /**
     * Adds element to data source
     * @param $data
     * @return mixed
     */
    public function add($data);

    /**
     * Updates element of data source
     *
     * @param $data
     * @return mixed
     */
    public function update($data);
}

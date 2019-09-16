<?php
/**
 * Created by Bibliomundi.
 * User: Victor Martins
 * Contact: victor.martins@bibliomundi.com.br
 * Site: http://bibliomundi.com.br
 *
 * The MIT License (MIT)
 * Copyright (c) 2015 bibliomundi
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * This file is used to autoload the API library
 */

$classes = [
    __DIR__ . '\BBMParser\Model\Price',
    __DIR__ . '\BBMParser\Model\Title',
	__DIR__ . '\BBMParser\Model\Contributor', 
	__DIR__ . '\BBMParser\Model\Author', 
	__DIR__ . '\BBMParser\Model\Ilustrator',
	__DIR__ . '\BBMParser\Model\Category',
	__DIR__ . '\BBMParser\Model\Bisac',
	__DIR__ . '\BBMParser\Model\CDD',
	__DIR__ . '\BBMParser\Model\Header', 
	__DIR__ . '\BBMParser\Model\Onix',
	__DIR__ . '\BBMParser\Model\Product',
	__DIR__ . '\BBMParser\Provider\ObjectParser',
	__DIR__ . '\BBMParser\Provider\OnixParser',
	__DIR__ . '\BBMParser\Provider\JsonParser',
	__DIR__ . '\BBMParser\Parser',
];

/**
 * Used to load the class passed by parameter.
 * @param $className
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

foreach($classes as $class)
{
    autoload($class);
}
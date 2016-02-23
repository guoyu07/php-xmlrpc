<?php
/**
 * Copyright 2016 Klarna AB.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Klarna\XMLRPC\Exception;

/**
 * Exception for invalid type.
 */
class InvalidTypeException extends KlarnaException
{
    /**
     * Constructor.
     *
     * @param string $param parameter
     * @param string $type  type
     */
    public function __construct($param, $type)
    {
        parent::__construct(
            "$param is not of the expected type. Expected: $type.",
            50062
        );
    }
}
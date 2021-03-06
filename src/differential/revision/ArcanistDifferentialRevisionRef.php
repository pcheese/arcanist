<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Reference to a Differential revision.
 *
 * @group differential
 */
class ArcanistDifferentialRevisionRef {

  protected $id;
  protected $name;
  protected $statusName;
  protected $sourcePath;

  public static function newFromDictionary(array $dictionary) {
    $ref = new ArcanistDifferentialRevisionRef();
    $ref->id         = $dictionary['id'];
    $ref->name       = $dictionary['name'];
    $ref->statusName = $dictionary['statusName'];
    $ref->sourcePath = $dictionary['sourcePath'];
    return $ref;
  }

  protected function __construct() {

  }

  public function getID() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getStatusName() {
    return $this->statusName;
  }

  public function getSourcePath() {
    return $this->sourcePath;
  }

}

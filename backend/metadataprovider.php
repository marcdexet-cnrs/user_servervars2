<?php
/**
 * ownCloud - 
 *
 * @author Marc DeXeT
 * @copyright 2014 DSI CNRS https://www.dsi.cnrs.fr
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 namespace OCA\User_Servervars2\Backend;

 interface MetadataProvider {

 	/**
 	 * Returns for ScopeValidator asociated to the provider
 	 * @param String $providerId The provider id
 	 * @param String $attributeName
 	 * @return ScopeValidator instance if any
 	 **/
 	public function getScopeValidator($providerId, $attributeName);

 	/**
 	 * @param String $providerId The provider id
 	 * @return String organization name
 	 */
 	public function getOrganization($providerId);

 	/**
 	 * @param String $providerId The provider id
 	 * @return String attribute name used for userId
 	 */
 	public function getUserIdAttributeName($providerId);
 
 }
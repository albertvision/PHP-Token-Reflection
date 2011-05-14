<?php
/**
 * PHP Token Reflection
 *
 * Version 1.0beta1
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this library in the file license.txt.
 *
 * @author Ondřej Nešpor <andrew@andrewsville.cz>
 * @author Jaroslav Hanslík <kukulich@kukulich.cz>
 */

namespace TokenReflection\Exception;
use TokenReflection;

/**
 * Runtime exception.
 *
 * Thrown while using reflection objects.
 */
class Runtime extends TokenReflection\Exception
{
	/**#@+
	 * Token streams are not being stored.
	 *
	 * @var integer
	 */
	const TOKEN_STREAM_STORING_TURNED_OFF = 13;
}

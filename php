
Fatal error: Uncaught Symfony\Component\Debug\Exception\FatalThrowableError: syntax error, unexpected ',', expecting ']' in C:\wamp64\www\alumni\src\DataFixtures\DegreeFixtures.php:13
Stack trace:
#0 [internal function]: Symfony\Component\Debug\DebugClassLoader->loadClass('App\\DataFixture...')
#1 [internal function]: spl_autoload_call('App\\DataFixture...')
#2 C:\wamp64\www\alumni\vendor\symfony\config\Resource\ReflectionClassResource.php(105): ReflectionClass->__construct('App\\DataFixture...')
#3 C:\wamp64\www\alumni\vendor\symfony\config\Resource\ReflectionClassResource.php(52): Symfony\Component\Config\Resource\ReflectionClassResource->computeHash()
#4 C:\wamp64\www\alumni\vendor\symfony\config\Resource\SelfCheckingResourceChecker.php(34): Symfony\Component\Config\Resource\ReflectionClassResource->isFresh(1571217533)
#5 C:\wamp64\www\alumni\vendor\symfony\config\ResourceCheckerConfigCache.php(99): Symfony\Component\Config\Resource\SelfCheckingResourceChecker->isFresh(Object(Symfony\Component\Config\Resource\Reflectio in C:\wamp64\www\alumni\src\DataFixtures\DegreeFixtures.php on line 13

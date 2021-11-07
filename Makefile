.PHONY: test
test:
	@echo "Design Pattern Tests"
	php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ --testdox --colors 

.PHONY: test-class
test-class:
	@echo "Design Pattern Tests for test class name"
	php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ --testdox --colors --filter $(filter-out $@,$(MAKECMDGOALS))


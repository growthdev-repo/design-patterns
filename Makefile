.PHONY: test
test:
	@echo "Design Pattern Tests"
	php ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/ --testdox --colors 

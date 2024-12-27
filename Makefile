install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
update-autoload:
	composer dump-autoload
git-graph:
	git log --pretty=format:"%h %s" --graph
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
/**
 * Created by Loretic on 24-12-14.
 */
casper.start('http://www.collectify.dev/web/app.php?controller=category&action=list', function() {
    this.echo('Start');
});

casper.then(function(){
    this.test.assertEqual(this.getCurrentUrl(), 'http://www.collectify.dev/web/app.php?controller=category&action=list');
})

casper.then(function() {
    this.clickLabel('Show');
});

/*
casper.then(function() {
    this.test.assertEqual(this.getCurrentUrl(), 'http://www.collectify.dev/web/app.php?controller=category&action=show&id=1');
});
*/
/*
casper.then(function() {
    this.echo(this.getCurrentUrl());
})
*/

casper.run(function() {
    this.test.done();
});
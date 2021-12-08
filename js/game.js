//Phaser 3 config
const config = {
  type: Phaser.AUTO,
  width: 1024,
  height: 513,
  physics: {
    default: 'arcade',
    arcade: {
        gravity: { y: 800 },
        debug: false
    }
  },
  scene: {
    preload,
    create,
    update
  }
};

//Initiliasing the game
const game = new Phaser.Game(config) 

//Variables for the game
let score = 0;
let scoreText;
let win = false;
let spikes; //Atempted to implement spikes but failed

function preload() {
  //Preloading the assets
  this.load.image('background', 'assets/background.jpg');
  this.load.image('tiles', 'assets/tileset.png');
  this.load.image('player', 'assets/character.png');
  this.load.image('apple', 'assets/apple.png');
  this.load.image('spike', 'assets/spike.png'); //Atempted to implement spikes but failed
  //Preloading the map
  this.load.tilemapTiledJSON('level1', 'assets/level1.json');
}

function create() {
  //Sets the background image for the game
  const backgroundImage = this.add.image(0, 0, 'background').setOrigin(0, 0);
  backgroundImage.setScale(2, 0.8);

  //Creating the map
  const map = this.make.tilemap({ key: 'level1'});
  const tileset = map.addTilesetImage('tileset', 'tiles');
  const platforms = map.createStaticLayer('Platforms', tileset, 0, 0);

  //Creating the player
  this.player = this.physics.add.sprite(30, 300, 'player');
  this.player.setBounce(0);
  
  //Make the player collide with the map assets
  platforms.setCollisionByExclusion(-1, true);
  this.player.setCollideWorldBounds(true);
  this.physics.add.collider(this.player, platforms);

  //Allows to move the player
  this.cursors = this.input.keyboard.createCursorKeys();
  cursors = this.input.keyboard.createCursorKeys();

  //Spawning apples across the map
  apples = this.physics.add.group({
      key: 'apple',
      repeat: 14,
      setXY: { x: 25, y: 50, stepX: 70 }
  });

  apples.children.iterate(function (child) {

      //Apples bounce on landing
      child.setBounceY(Phaser.Math.FloatBetween(0.3, 0.4));

  });

  spikes = this.physics.add.group(); //Atempted to implement spikes but failed

  //Score text
  scoreText = this.add.text(16, 16, 'Score: 0', { fontSize: '32px', fill: '#000' });

  //Player and Apple collision with platforms
  this.physics.add.collider(this.player, platforms);
  this.physics.add.collider(apples, platforms);
  this.physics.add.collider(spikes, platforms); //Atempted to implement spikes but failed

  this.physics.add.overlap(this.player, apples, collectApple, null, this);
  this.physics.add.collider(this.player, spikes, hitSpike, null, this);
}

function update() {
  //Constantly reads the input and moves the player accordingly
  if (this.cursors.left.isDown) {
    this.player.x -= 3;
    }

  if (this.cursors.right.isDown) {
    this.player.x += 3;
    }

  if (this.cursors.up.isDown) {
    this.player.y -= 4;
  }

  if (win) {
    return;
  }
}

//Apples eaten on player touch
function collectApple (player, apple) {
  apple.disableBody(true, true);

  // if (apple.countActive(true) === 15) //Doesn't work, intended to stop the game when all of the apples are collected
  // {
  //   this.scene.stop()
  // }

  score += 1;
  scoreText.setText('Score: ' + score);

  let spike = spikes.create(x, 200, 'spike');
  spike.setCollideWorldBounds(true);
}

function hitSpike (player, bomb) {}
{
  this.physics.pause();


}
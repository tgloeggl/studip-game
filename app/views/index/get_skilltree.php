{
  "html": {
    "name": "Trails",
    "max": "3",
    "sprite": "0x0",
    "current": "0",
    "hint": [
      {
        "text": "Sprich mit dem Erfinder von Trails!"
      },
      {
        "text": "Der Erfinder von Trails lautet...",
        "level": "1"
      },
      {
        "text": "Der Erfinder von Trails lautet...",
        "level": "2"
      },
      {
        "text": "Der Erfinder von Trails lautet...",
        "level": "3"
      }
    ],
    "sprites": {
      "2": [
        1,
        0
      ],
      "3": [
        2,
        0
      ]
    },
    "pos": [
      400,
      200
    ]
  },
  "css": {
    "name": "CSS",
    "max": "4",
    "sprite": "6x0",
    "current": "0",
    "mustHave": "html",
    "hint": [
      {
        "text": "The art of the markup"
      },
      {
        "text": "Oh, come on. Everybody knows CSS.",
        "level": "0"
      }
    ],
    "sprites": {
      "2": [
        7,
        0
      ],
      "4": [
        8,
        0
      ]
    },
    "pos": [
      400,
      310
    ]
  },
  "preprocessors": {
    "name": "CSS Preprocessors",
    "max": "3",
    "sprite": "4x4",
    "current": "0",
    "hint": [
      {
        "text": "LESS, SASS and others"
      },
      {
        "text": "<i>First level of skill means that the hero knows how to set up the preprocessors and use some of their basics.</i>",
        "level": "0"
      },
      {
        "text": "The hero knows how to set up the preprocessors and use some of their basics (variables, imports and simple mixins)",
        "level": "1"
      },
      {
        "text": "<i>Next level means that the hero knows how to use parametric mixins and transformations</i>",
        "level": "1"
      },
      {
        "text": "The hero knows how to set up the preprocessors and is aware of their advanced use (variables, mixins and functions)",
        "level": "2"
      },
      {
        "text": "<i>Next level means that the hero utilizes various mixin libraries (LESSHat, Compass, etc)</i>",
        "level": "2"
      },
      {
        "text": "The hero knows how to set up the preprocessors and is aware of their advanced use (variables, mixins and functions) as well as mixin libraries.",
        "level": "3"
      }
    ],
    "sprites": {
      "2": [
        5,
        4
      ],
      "3": [
        6,
        4
      ]
    },
    "dependency": {
      "1": {
        "css": 1,
        "html": 1
      },
      "2": {
        "css": 3
      }
    },
    "pos": [
      400,
      420
    ]
  }
}

CREATE VIRTUAL TABLE content USING fts4(
url VARCHAR(256) NOT NULL,
body TEXT, tokenize=porter);
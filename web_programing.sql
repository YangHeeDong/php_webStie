# DB 생성
DROP DATABASE IF EXISTS web_programing;
CREATE DATABASE web_programing;
USE web_programing;

#멤버 테이블 생성
CREATE TABLE members (
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT '번호',
    regDate CHAR(20) NOT NULL COMMENT '작성날짜',
    updateDate CHAR(20) NOT NULL COMMENT '수정날짜',
    loginId CHAR(20) NOT NULL COMMENT '로그인 아이디',
    loginPw CHAR(20) NOT NULL COMMENT '로그인 비밀번호',
    `name` CHAR(20) NOT NULL COMMENT '이름',
    email CHAR(50) NOT NULL COMMENT '이메일'
);

#메세지 테이블 생성
CREATE TABLE message (
   id INT NOT NULL AUTO_INCREMENT,
   sendId CHAR(20) NOT NULL,
   rvId CHAR(20) NOT NULL,
   title CHAR(200) NOT NULL,
   `body` TEXT NOT NULL, 
   regDate CHAR(20),
   PRIMARY KEY(id)
);

CREATE TABLE article (
   id INT NOT NULL AUTO_INCREMENT,
   boardId INT(10) NOT NULL,
   `mid` CHAR(20) NOT NULL,
   `name` CHAR(20) NOT NULL,
   title CHAR(200) NOT NULL,
   `body` TEXT NOT NULL,
   regDate CHAR(20),
   updateDate CHAR(20),
   PRIMARY KEY(id)
);

CREATE TABLE reply (
   id INT NOT NULL AUTO_INCREMENT,
   parentId INT(10) NOT NULL,
   `mid` CHAR(20) NOT NULL,
   `name` CHAR(20) NOT NULL,
   `body` TEXT NOT NULL,
   regDate CHAR(20),
   updateDate CHAR(20),
   PRIMARY KEY(id)
);

INSERT INTO message
SET regDate= NOW(),
sendId = '123',
rvId = '123',
title = '111',
`body` = '222';

INSERT INTO article
SET boardId = 0,
`mid` = 123,
`name` = 123,
title = '공지입니다',
`body` = '공지 공지',
regDate = NOW(),
updateDate = NOW();
DESC article;

INSERT INTO article
SET boardId = 1,
`mid` = 123,
`name` = 123,
title = '자유다',
`body` = '자유자유',
regDate = NOW(),
updateDate = NOW();
DESC article;

SELECT * FROM article;

DESC reply;

SELECT * FROM reply;

CREATE TABLE simOneResult (
   typeCode CHAR(20) NOT NULL,
   `body` TEXT NOT NULL
);

INSERT INTO simOneResult
SET typeCode = 'a',
`body` = '다른 사람들은 당신을 조심스럽게 대해야 할 사람이라고 생각하고 있어요.
당신은 다른 사람들에게 우쭐거리며, 자만심이 강하고, 또 이기적인 사람으로 비춰지고 있어요.
아마 다른 사람들은 당신을 칭찬하고, 그들은 당신이 자신을 좀 더 좋아해 주길 바라고 있을거에요.
그러나 당신을 언제나 신용하지 않고, 당신과 깊게 사귀는 것을 주저하고 있대요';

INSERT INTO simOneResult
SET typeCode = 'b',
`body` = '당신의 친구들은 당신을 활기차고, 열정적인 사람이며, 충동적이라고 생각하고 있어요.
타고난 리더이며 의사결정이 빠른 사람이라고도 여긴대요.
그들은 당신을 대담하고, 모험심이 강하고, 도전의식이 강한사람이라고 생각하며,
당신이 뿜어내는 매력에 당신과 함께 있기를 원한대요.';

INSERT INTO simOneResult
SET typeCode = 'c',
`body` = '다른 사람들은 당신을 신선하고, 생기 활발하며, 매력적이고, 재미있고,
항상 즐거운 사람으로 여긴대요.
사람들의 중심에 서 있지만 균형적이어서 때론 당신의 두각이 나타나지 않아요.
하지만 친절하고 이해심 많고 분별력이 있어 그들을 항상 즐겁게 해주고,
도와줄 수 있다고 생각하여 당신을 소중히 여기고 있어요.';

INSERT INTO simOneResult
SET typeCode = 'd',
`body` = '다른 사람들은 당신을 이해가 빠르고 신중하고, 주의 깊은 사람이라고 여겨요.
그들은 당신을 영리하고 재능이 많다고 생각해요.
당신은 친구를 빠르게 사귀지는 못하지만, 의리가 있는 사람으로 여겨요.
또한 당신에 대한 의리가 두터워 언제나 당신을 신뢰하며,
의리를 지키려고 노력해요.
그리고 당신 또한 이 의리가 오래 간다고 생각해요.';

INSERT INTO simOneResult
SET typeCode = 'e',
`body` = '당신의 친구들은 당신을 까다롭게 여겨요.
당신이 지나치게 주의 깊다고 생각하고 따분한 사람으로 여길지도 몰라요.
당신이 어떤일을 충동적이게 급히 처리할 때에는,
다른 사람들은 매우 놀라하며 당신의 또 다른 면이라고 생각할 거에요.
그만큼 당신은 다른사람들에게 조금 차가운 이미지에요.';

INSERT INTO simOneResult
SET typeCode = 'f',
`body` = '사람들은 당신을 매우 수줍음이 많고 소극적인 사람으로 생각해요.
우유부단하다고 여길수 있고, 여성적인 면이 강해서
다른사람에게 의지하는 면이 많다고 생각할 수 있어요.
그리고 복잡하게 얽히기를 원하지 않는 사람이라고 볼 수 있고,
다른사람이 당신 곁에 오는 것을 조금 꺼려하는 것으로 보여질 수 있어요.';

SELECT * FROM simOneResult;

SELECT * FROM simOneResult WHERE typeCode='a';

CREATE TABLE simTwoResult (
   typeCode CHAR(20) NOT NULL,
   `body` TEXT NOT NULL
);

INSERT INTO simTwoResult
SET typeCode = '111',
`body` = '축구 동아리';

INSERT INTO simTwoResult
SET typeCode = '112',
`body` = '마라톤 동아리';

INSERT INTO simTwoResult
SET typeCode = '121',
`body` = '사진 동아리';

INSERT INTO simTwoResult
SET typeCode = '122',
`body` = '영화제작 동아리';

INSERT INTO simTwoResult
SET typeCode = '211',
`body` = '댄스 동아리';

INSERT INTO simTwoResult
SET typeCode = '212',
`body` = '헬스 동아리';

INSERT INTO simTwoResult
SET typeCode = '221',
`body` = '합창 동아리';

INSERT INTO simTwoResult
SET typeCode = '222',
`body` = '미술 동아리';

SELECT * FROM members;
DESC members;

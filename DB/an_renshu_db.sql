-- 練習問題
-- 1.単価500以上、商品名と単価のみ
select shohin_mei,tanka from shohin where tanka>=500;
-- 2.得意先ID が 4 の伝票を受注日順に 3件
select * from denpyo where  tokui_id = 4 
order by juchu_bi  limit 3; -- limit 0,3を省略
-- 3.得意先IDが1と5の伝票のみ
  -- select * from denpyo where tokui_id in (1, 5);
select denpyo_id, tokui_id, juchu_bi
from `denpyo` left join `tokui` using(tokui_id)
where `tokui_id` in(1,5);
-- 4.伝票番号21のデータと得意先の全情報
select * from denpyo left join tokui using(tokui_id) 
where denpyo_id=21 ;
-- 5.伝票番号20で売り上げた商品と、小計
select shohin_id, shohin_mei, tanka, suryo, tanka*suryo
from shohin left join shosai using (shohin_id)
where denpyo_id = 20 ;
-- 6.フィールドの名前が小計になるように
select shohin_id, shohin_mei, tanka, suryo, tanka*suryo as 小計
from shohin left join shosai using (shohin_id)
where denpyo_id = 20 ;
-- 7.日付の期間指定:伝票の2019-1-1~2019-1-31
  -- juchu_bi >= '2019-1-1' and juchu_bi <= '2019-1-31';
select * from denpyo 
where  juchu_bi between '2019-1-1' and '2019-1-31';


-- 得意ID 6 の発行数を数えてください
SELECT count(*) FROM denpyo WHERE tokui_id=6
-- denpyoとtokuiを結合 distinctは重複を省く
SELECT distinct tokui_mei
FROM denpyo LEFT JOIN tokui USING(tokui_id); 
-- 5月の伝票数をカウントしてください
SELECT count(*) FROM denpyo
  -- where juchu_bi between '2019-05-01' and '2019-05-31';
  -- 日付の書式を変える関数 
WHERE date_format(juchu_bi,'%Y-%m')='2019-05'; 
-- 特定のフィールドをグループ化 GROUP BY フィールド名
SELECT  tokui_mei 
FROM denpyo LEFT JOIN tokui USING(tokui_id)
GROUP BY tokui_mei;   -- distinctと同じ結果
-- 2月に売った得意先の一覧
SELECT  tokui_mei
FROM denpyo LEFT JOIN tokui USING(tokui_id)
WHERE date_format(juchu_bi,'%Y-%m')='2019-02'
GROUP BY tokui_mei ;
-- 2月の得意先ごとの発行数
SELECT  tokui_mei, count(*) as count
FROM denpyo LEFT JOIN tokui USING(tokui_id)
WHERE date_format(juchu_bi,'%Y-%m')='2019-02'
GROUP BY tokui_mei ;
-- 売上順に並べてみる発行数順
GROUP BY  tokui_mei ORDER BY count desc;
-- 最も回数の多い得意先のみ
ORDER BY count desc LIMIT 1;
-- 売れた数の多い順に商品名と売上点数を表示してください
SELECT shohin_mei, sum(suryo) as 合計
FROM shosai LEFT JOIN  shohin USING(shohin_id)
GROUP BY shohin_mei -- shohin_idでもいい
ORDER BY 合計 desc;
-- 商品ごとの売上金額の降順
SELECT shohin_mei, sum(suryo*tanka) as 合計
-- 月ごとの売上金額降順 日付情報はdenpyoにあるので3つ結合
SELECT date_format(juchu_bi,'%Y-%m') as 月, sum(suryo*tanka) as 合計
FROM shosai 
LEFT JOIN denpyo USING(denpyo_id) 
LEFT JOIN shohin USING(shohin_id)
GROUP BY 月 ORDER BY 合計 desc;
-- 顧客ごとの平均購入額
SELECT tokui_mei, round(avg(suryo*tanka)) as 平均
FROM shosai 
LEFT JOIN shohin USING(shohin_id)
LEFT JOIN denpyo USING(denpyo_id) 
LEFT JOIN tokui USING(tokui_id)
GROUP BY tokui_id 
ORDER BY 平均 desc ;
-- さらに平均購入額が5000円以上で絞り込む
GROUP BY tokui_id 
HAVING 平均 >= 5000
ORDER BY 平均 desc ;
### 求和
```
$arr = [
    		[
    		'a' => 1,
    		'b' => [
    			'c1' => ['e' => 1],
    			'd1' => ['e' => 1],
    		],
    	],
    		[
    		'a' => 1,
    		'b' => [
    			'c2' => ['e' => 1],
    			'd2' => ['e' => 1],
    		],
    	],
    ];

    	dump(collect($arr)->flatMap(function($a) {
    		return $a['b'];//循环取出$a['b']并且降维.
    	})->sum('e'));
```

### 或许可以使用数组代替swith case语句
![11]('.images/捕获_10.PNG')

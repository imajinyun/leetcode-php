# 💫 LeetCode for PHP 🐘

[![Build Status](https://travis-ci.com/imajinyun/leetcode-php.svg?branch=master)](https://travis-ci.com/imajinyun/leetcode-php)
[![Build status](https://ci.appveyor.com/api/projects/status/63m04iayror6ieh2?svg=true)](https://ci.appveyor.com/project/imajinyun/leetcode-php)
[![Build](https://github.com/imajinyun/leetcode-php/actions/workflows/build.yml/badge.svg)](https://github.com/imajinyun/leetcode-php/actions/workflows/build.yml)
[![codecov](https://codecov.io/gh/imajinyun/leetcode-php/branch/master/graph/badge.svg?token=Y9H1AHWLFY)](https://codecov.io/gh/imajinyun/leetcode-php)
[![StyleCI](https://github.styleci.io/repos/363634864/shield?branch=master)](https://github.styleci.io/repos/363634864?branch=master)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=leetcode-php&metric=alert_status)](https://sonarcloud.io/dashboard?id=leetcode-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/imajinyun/leetcode-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/imajinyun/leetcode-php/?branch=master)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php?ref=badge_shield)
[![Version](https://img.shields.io/static/v1?label=version&message=%3E%3D8.0&color=%234F5893&labelColor=grey&logo=PHP&logoColor=blue&style=flat&link=https%3A%2F%2Fwww.php.net%2Fsupported-versions.php)](https://www.php.net/supported-versions.php)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php?ref=badge_shield)

## Requirements

* PHP >= 8.0
* PHPUnit >= 9.5

## Installation

Install the package through [Composer](https://getcomposer.org/).

Run the Composer require command from the Terminal:

```bash
git clone git@github.com:imajinyun/leetcode-php.git
cd leetcode-php
composer install
```

## Usage

```bash
phpunit -vvv
```

## Contents

### LeetCode

<details>
<summary>Array</summary>

|Subject|Source|Solution|
|---|---|---|
|`0001. 两数之和`|[Two Sum](https://leetcode.com/problems/two-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TwoSum.php)|
|`0118. 杨辉三角`|[Pascal's Triangle](https://leetcode.com/problems/pascals-triangle/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PascalsTriangle.php)|
|`0026. 删除有序数组中的重复项`|[Remove Duplicates from Sorted Array](https://leetcode.com/problems/remove-duplicates-from-sorted-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RemoveDuplicatesFromSortedArray.php)|
|`0027. 移除元素`|[Remove Element](https://leetcode.com/problems/remove-element/)||
|`0035. 搜索插入位置`|[Search Insert Position](https://leetcode.com/problems/search-insert-position/)||
|`0053. 最大子序和`|[Maximum Subarray](https://leetcode.com/problems/maximum-subarray/)||
|`0066. 加一`|[Plus One](https://leetcode.com/problems/plus-one/)||
|`0088. 合并两个有序数组`|[Merge Sorted Array](https://leetcode.com/problems/merge-sorted-array/)||
|`0118. 杨辉三角`|[Pascal's Triangle](https://leetcode.com/problems/pascals-triangle/)||
|`0119. 杨辉三角 II`|[Pascal's Triangle II](https://leetcode.com/problems/pascals-triangle-ii/)||
|`0163. 缺失的区间`|[Missing Ranges](https://leetcode.com/problems/missing-ranges/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MissingRanges.php)|
|`0167. 两数之和 II - 输入有序数组`|[Two Sum II - Input array is sorted](https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/)||
|`0169. 多数元素`|[Majority Element](https://leetcode.com/problems/majority-element/)||
|`0189. 旋转数组`|[Rotate Array](https://leetcode.com/problems/rotate-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RotateArray.php)|
|`0215. 数组中的第 K 个最大元素`|[Kth Largest Element in an Array](https://leetcode.com/problems/kth-largest-element-in-an-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/KthLargestElementInAnArray.php)|
|`0217. 存在重复元素`|[Contains Duplicate](https://leetcode.com/problems/contains-duplicate/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ContainsDuplicate.php)|
|`0219. 存在重复元素 II`|[Contains Duplicate II](https://leetcode.com/problems/contains-duplicate-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ContainsDuplicateII.php)|
|`0228. 汇总区间`|[Summary Ranges](https://leetcode.com/problems/summary-ranges/)||
|`0238. `|[Product of Array Except Self](https://leetcode.com/problems/product-of-array-except-self/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ProductOfArrayExceptSelf.php)|
|`0243. 最短单词距离`|[Shortest Word Distance](https://leetcode.com/problems/shortest-word-distance/)||
|`0268. 丢失的数字`|[Missing Number](https://leetcode.com/problems/missing-number/)||
|`0283. 移动零`|[Move Zeroes](https://leetcode.com/problems/move-zeroes/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MoveZeroes.php)|
|`0350. 两个数组的交集 II`|[Intersection of Two Arrays II](https://leetcode.com/problems/intersection-of-two-arrays-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/IntersectionOfTwoArraysII.php)|
|`0384. 打乱数组`|[Shuffle an Array](https://leetcode.com/problems/shuffle-an-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ShuffleAnArray.php)|
|`0414. 第三大的数`|[Third Maximum Number](https://leetcode.com/problems/third-maximum-number/)||
|`0448. 找到所有数组中消失的数字`|[Find All Numbers Disappeared in an Array](https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/)||
|`0485. 最大连续 1 的个数`|[Max Consecutive Ones](https://leetcode.com/problems/max-consecutive-ones/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MaxConsecutiveOnes.php)|
|`0509. 斐波那契数`|[Fibonacci Number](https://leetcode.com/problems/fibonacci-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FibonacciNumber.php)|
|`0561. 数组拆分 I`|[Array Partition I](https://leetcode.com/problems/array-partition-i/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ArrayPartitionI.php)|
|`0566. 重塑矩阵`|[Reshape the Matrix](https://leetcode.com/problems/reshape-the-matrix/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReshapeTheMatrix.php)|
|`0605. 种花问题`|[Can Place Flowers](https://leetcode.com/problems/can-place-flowers/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CanPlaceFlowers.php)|
|`0628. 三个数的最大乘积`|[Maximum Product of Three Numbers](https://leetcode.com/problems/maximum-product-of-three-numbers/)||
|`0643. 子数组最大平均数 I`|[Maximum Average Subarray I](https://leetcode.com/problems/maximum-average-subarray-i/)||
|`0661. 图片平滑器`|[Image Smoother](https://leetcode.com/problems/image-smoother/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ImageSmoother.php)|
|`0674. 最长连续递增序列`|[Longest Continuous Increasing Subsequence](https://leetcode.com/problems/longest-continuous-increasing-subsequence/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestContinuousIncreasingSubsequence.php)|
|`0697. 数组的度`|[Degree of an Array](https://leetcode.com/problems/degree-of-an-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DegreeOfAnArray.php)|
|`0717. 1 比特与 2 比特字符`|[1-bit and 2-bit Characters](https://leetcode.com/problems/1-bit-and-2-bit-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/OneBitAndTwoBitCharacters.php)|
|`0724. 寻找数组的中心下标`|[Find Pivot Index](https://leetcode.com/problems/find-pivot-index/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindPivotIndex.php)|
|`0746. 使用最小花费爬楼梯`|[Min Cost Climbing Stairs](https://leetcode.com/problems/min-cost-climbing-stairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinCostClimbingStairs.php)|
|`0747. 至少是其他数字两倍的最大数`|[Largest Number At Least Twice of Others](https://leetcode.com/problems/largest-number-at-least-twice-of-others/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LargestNumberAtLeastTwiceOfOthers.php)|
|`0766. 托普利茨矩阵`|[Toeplitz Matrix](https://leetcode.com/problems/toeplitz-matrix/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ToeplitzMatrix.php)|
|`0830. 较大分组的位置`|[Positions of Large Groups](https://leetcode.com/problems/positions-of-large-groups/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PositionsOfLargeGroups.php)|
|`0832. 翻转图像`|[Flipping an Image](https://leetcode.com/problems/flipping-an-image/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FlippingAnImage.php)|
|`0867. 转置矩阵`|[Transpose Matrix](https://leetcode-cn.com/problems/transpose-matrix/)|[Solution]()|
|`0888. 公平的糖果棒交换`|[Fair Candy Swap](https://leetcode.com/problems/fair-candy-swap/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FairCandySwap.php)|
|`0896. 单调数列`|[Monotonic Array](https://leetcode.com/problems/monotonic-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MonotonicArray.php)|
|`0905. 按奇偶排序数组`|[Sort Array By Parity](https://leetcode.com/problems/sort-array-by-parity/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SortArrayByParity.php)|
|`0914. 卡牌分组`|[X of a Kind in a Deck of Cards](https://leetcode.com/problems/x-of-a-kind-in-a-deck-of-cards/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/XOfAKindInADeckOfCards.php)|
|`0922. 按奇偶排序数组 II`|[Sort Array By Parity II](https://leetcode.com/problems/sort-array-by-parity-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SortArrayByParityII.php)|
|`0941. 有效的山脉数组`|[Valid Mountain Array](https://leetcode.com/problems/valid-mountain-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidMountainArray.php)|
|`0977. 有序数组的平方`|[Squares of a Sorted Array](https://leetcode.com/problems/squares-of-a-sorted-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SquaresOfASortedArray.php)|
|`0985. 查询后的偶数和`|[Sum of Even Numbers After Queries](https://leetcode.com/problems/sum-of-even-numbers-after-queries/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SumOfEvenNumbersAfterQueries.php)|
|`0989. 数组形式的整数加法`|[Add to Array-Form of Integer](https://leetcode.com/problems/add-to-array-form-of-integer/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AddToArrayFormOfInteger.php)|
|`0999. 可以被一步捕获的棋子数`|[Available Captures for Rook](https://leetcode.com/problems/available-captures-for-rook/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AvailableCapturesForRook.php)|
|`1002. 查找常用字符`|[Find Common Characters](https://leetcode.com/problems/find-common-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindCommonCharacters.php)|
|`1013. 将数组分成和相等的三个部分`|[Partition Array Into Three Parts With Equal Sum](https://leetcode.com/problems/partition-array-into-three-parts-with-equal-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PartitionArrayIntoThreePartsWithEqualSum.php)|
|`1018. 可被 5 整除的二进制前缀`|[Binary Prefix Divisible By 5](https://leetcode.com/problems/binary-prefix-divisible-by-5/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HeightChecker.php)|
|`1051. 高度检查器`|[Height Checker](https://leetcode.com/problems/height-checker/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HeightChecker.php)|
|`1064. 不动点`|[Fixed Point](https://leetcode.com/problems/fixed-point/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FixedPoint.php)|
|`1085. 最小元素各数位之和`|[Sum of Digits in the Minimum Number](https://leetcode.com/problems/sum-of-digits-in-the-minimum-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SumOfDigitsInTheMinimumNumber.php)|
|`1086. 前五科的均分`|[High Five](https://leetcode.com/problems/high-five/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HighFive.php)|
|`1089. 复写零`|[Duplicate Zeros](https://leetcode.com/problems/duplicate-zeros/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DuplicateZeros.php)|
|`1099 小于 K 的两数之和`|[Two Sum Less Than K](https://leetcode.com/problems/two-sum-less-than-k/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TwoSumLessThanK.php)|
|`1122. 数组的相对排序`|[Relative Sort Array](https://leetcode.com/problems/relative-sort-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RelativeSortArray.php)|
|`1128. 等价多米诺骨牌对的数量`|[Number of Equivalent Domino Pairs](https://leetcode.com/problems/number-of-equivalent-domino-pairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NumberOfEquivalentDominoPairs.php)|
|`1150. 检查一个数是否在数组中占绝大多数`|[Check If a Number Is Majority Element in a Sorted Array](https://leetcode.com/problems/check-if-a-number-is-majority-element-in-a-sorted-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CheckIfANumberIsMajorityElementInASortedArrayEasy.php)|
|`1160. 拼写单词`|[Find Words That Can Be Formed by Characters](https://leetcode.com/problems/find-words-that-can-be-formed-by-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindWordsThatCanBeFormedByCharacters.php)|
|`1176. 健身计划评估`|[Diet Plan Performance Easy](https://leetcode.com/problems/diet-plan-performance/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DietPlanPerformanceEasy.php)|
|`1184. 公交站间的距离`|[Distance Between Bus Stops](https://leetcode.com/problems/distance-between-bus-stops/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DistanceBetweenBusStops.php)|
|`1185. 一周中的第几天`|[Day of the Week](https://leetcode.com/problems/day-of-the-week/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DayOfTheWeek.php)|
|`1200. 最小绝对差`|[Minimum Absolute Difference](https://leetcode.com/problems/minimum-absolute-difference/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinimumAbsoluteDifference.php)|
|`1217. 玩筹码`|[Minimum Cost to Move Chips to The Same Position](https://leetcode.com/problems/minimum-cost-to-move-chips-to-the-same-position/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinimumCostToMoveChipsToTheSamePosition.php)|
|`1232. 缀点成线`|[Check If It Is a Straight Line](https://leetcode.com/problems/check-if-it-is-a-straight-line/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CheckIfItIsAStraightLine.php)|
|`1243. 数组变换`|[Array Transformation](https://leetcode.com/problems/array-transformation/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ArrayTransformation.php)|
|`1252. 奇数值单元格的数目`|[Cells with Odd Values in a Matrix](https://leetcode.com/problems/cells-with-odd-values-in-a-matrix/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CellsWithOddValueInAMatrix.php)|
|`1260. 二维网格迁移`|[Shift 2D Grid](https://leetcode.com/problems/shift-2d-grid/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/Shift2DGrid.php)|
|`1266. 访问所有点的最小时间`|[Minimum Time Visiting All Points](https://leetcode.com/problems/minimum-time-visiting-all-points/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinimumTimeVisitingAllPoints.php)|
|`1275. `|[Find Winner on a Tic Tac Toe Game](https://leetcode.com/problems/find-winner-on-a-tic-tac-toe-game/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindWinnerOnATicTacToeGame.php)|
|`1295. 统计位数为偶数的数字`|[Find Numbers with Even Number of Digits](https://leetcode.com/problems/find-numbers-with-even-number-of-digits/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindNumbersWithEvenNumberOfDigits.php)|

</details>

<details>
<summary>HashTable</summary>

|Subject|Source|Solution|
|---|---|---|
|`0001. 两数之和`|[Two Sum](https://leetcode.com/problems/two-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TwoSum.php)|
|`0012. 整数转罗马数字`|[Integer to Roman](https://leetcode.com/problems/integer-to-roman/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/IntegerToRoman.php)|
|`0013. 罗马数字转整数`|[Roman to Integer](https://leetcode.com/problems/roman-to-integer/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RomanToInteger.php)|
|`0136. 只出现一次的数字`|[Single Number](https://leetcode.com/problems/single-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindWinnerOnATicTacToeGame.php)|
|`0202. 快乐数`|[Happy Number](https://leetcode.com/problems/happy-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HappyNumber.php)|
|`0242. 有效的字母异位词`|[Valid Anagram](https://leetcode.com/problems/valid-anagram/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidAnagram.php)|
|`0454. 四数相加 II`|[4Sum II](https://leetcode.com/problems/4sum-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FourSumII.php)|
|`0387. `|[First Unique Character in a String](https://leetcode.com/problems/first-unique-character-in-a-string/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FirstUniqueCharacterInAString.php)|

</details>

<details>
<summary>Linked List</summary>

|Subject|Source|Solution|
|---|---|---|
|`0002. 两数相加`|[Add Two Numbers](https://leetcode.com/problems/add-two-numbers/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AddTwoNumbers.php)|
|`0021. 合并两个有序链表`|[Merge Two Sorted Lists](https://leetcode.com/problems/merge-two-sorted-lists/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MergeTwoSortedLists.php)|
|`0024. 两两交换链表中的节点`|[Swap Nodes in Pairs](https://leetcode.com/problems/swap-nodes-in-pairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SwapNodesInPairs.php)|
|`0092. 反转链表 II`|[Reverse Linked List II](https://leetcode.com/problems/reverse-linked-list-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReverseLinkedListII.php)|
|`0206. 反转链表`|[Reverse Linked List](https://leetcode.com/problems/reverse-linked-list/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReverseLinkedList.php)|
|`0141. 环形链表`|[Linked List Cycle](https://leetcode.com/problems/linked-list-cycle/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LinkedListCycle.php)|
|`0234. 回文链表`|[Palindrome Linked List](https://leetcode.com/problems/palindrome-linked-list/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PalindromeLinkedList.php)|
|`0237. 删除链表中的节点`|[Delete Node in a Linked List](https://leetcode.com/problems/delete-node-in-a-linked-list/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DeleteNodeInALinkedList.php)|

</details>

<details>
<summary>Math</summary>

|Subject|Source|Solution|
|---|---|---|
|`0013. 罗马数字转整数`|[Roman to Integer](https://leetcode.com/problems/roman-to-integer/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RomanToInteger)|
|`0050. 计算 x 的 n 次幂`|[Pow(x, n)](https://leetcode.com/problems/powx-n/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/Pow.php)|
|`0066. 加一`|[Plus One](https://leetcode.com/problems/plus-one/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PlusOne.php)|
|`0069. X 的平方根`|[Sqrt(x)](https://leetcode.com/problems/sqrtx/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SqrtX.php)|
|`0150. 逆波兰表达式求值`|[Evaluate Reverse Polish Notation](https://leetcode.com/problems/evaluate-reverse-polish-notation/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/EvaluateReversePolishNotation.php)|
|`0171. Excel 表列序号`|[Excel Sheet Column Number](https://leetcode.com/problems/excel-sheet-column-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ExcelSheetColumnNumber.php)|
|`0227. 基本计算器 II`|[Basic Calculator II](https://leetcode.com/problems/basic-calculator-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BasicCalculatorII.php)|
|`1118. 一月有多少天`|[Number of Days in a Month](https://leetcode.com/problems/number-of-days-in-a-month/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NumberOfDaysInAMonth.php)|

</details>

<details>
<summary>Two Pointers</summary>

|Subject|Source|Solution|
|---|---|---|
|`0015. 三数之和`|[3Sum](https://leetcode.com/problems/3sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ThreeSum.php)|
|`0016. 最接近的三数之和`|[3Sum Closest](https://leetcode.com/problems/3sum-closest/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ThreeSumClosest.php)|
|`0018. 四数之和`|[4Sum](https://leetcode.com/problems/4sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FourSum.php)|
|`0287. 寻找重复数`|[Find the Duplicate Number](https://leetcode.com/problems/find-the-duplicate-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FourSum.php)|

</details>

<details>
<summary>String</summary>

|Subject|Source|Solution|
|---|---|---|
|`0003. 无重复字符的最长子串`|[Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestSubstringWithoutRepeatingCharacters.php)|
|`0005. 最长回文子串`|[Longest Palindromic Substring](https://leetcode.com/problems/longest-palindromic-substring/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestPalindromicSubstring.php)|
|`0006. Z 字形变换`|[Zigzag Conversion](https://leetcode.com/problems/longest-palindromic-substring/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ZigzagConversion.php)|
|`0008. 字符串转换整数 (atoi)`|[String to Integer (atoi)](https://leetcode.com/problems/string-to-integer-atoi/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/StringToInteger.php)|
|`0125. 验证回文串`|[Valid Palindrome](https://leetcode.com/problems/valid-palindrome/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidPalindrome.php)|
|`0179. 最大数`|[Largest Number](https://leetcode.com/problems/largest-number/)|[Soluton](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LargestNumber.php)|
|`0344. 反转字符串`|[Reverse String](https://leetcode.com/problems/reverse-string/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReverseString.php)|
|`0409. 最长回文串`|[Longest Palindrome](https://leetcode.com/problems/longest-palindrome/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestPalindrome.php)|

</details>

<details>
<summary>Binary Search</summary>

|Subject|Source|Solution|
|---|---|---|
|`0069. x 的平方根`|[Sqrt(x)](https://leetcode.com/problems/sqrtx/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SqrtX.php)|
|`0162. 寻找峰值`|[Find Peak Element](https://leetcode.com/problems/find-peak-element/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindPeakElement.php)|

</details>

<details>
<summary>Divide and Conquer</summary>

|Subject|Source|Solution|
|---|---|---|
|`0169. 多数元素`|[Majority Element](https://leetcode.com/problems/majority-element/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MajorityElement)|

</details>

<details>
<summary>Dynamic Programming</summary>

|Subject|Source|Solution|
|---|---|---|
|`0005. 最长回文子串`|[Longest Palindromic Substring](https://leetcode.com/problems/longest-palindromic-substring/)||
|`0062. 不同路径`|[Unique Paths](https://leetcode.com/problems/unique-paths/)||
|`0063. 不同路径 II`|[Unique Paths II](https://leetcode.com/problems/unique-paths-ii/)||
|`0064. 最小路径和`|[Minimum Path Sum](https://leetcode.com/problems/minimum-path-sum/)||
|`0070. 爬楼梯`|[Climbing Stairs](https://leetcode.com/problems/climbing-stairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ClimbingStairs.php)|
|`0072. 编辑距离`|[Edit Distance](https://leetcode.com/problems/edit-distance/)||
|`0120. 三角形最小路径和`|[Triangle](https://leetcode.com/problems/triangle/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/Triangle.php)|
|`0121. 买卖股票的最佳时机`|[Best Time to Buy and Sell Stock](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStock.php)|
|`0122. 买卖股票的最佳时机 II`|[Best Time to Buy and Sell Stock II](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStockII.php)|
|`0123. 买卖股票的最佳时机 III`|[Best Time to Buy and Sell Stock III](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-iii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStockIII.php)|
|`0128. 最长连续序列`|[Longest Consecutive Sequence](https://leetcode.com/problems/longest-consecutive-sequence/)||
|`0152. 乘积最大子数组`|[Maximum Product Subarray](https://leetcode.com/problems/maximum-product-subarray/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MaximumProductSubarray.php)|
|`0188. 买卖股票的最佳时机 IV`|[Best Time to Buy and Sell Stock IV](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-iv/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStockIV.php)|
|`0213. 打家劫舍 II`|[House Robber II](https://leetcode.com/problems/house-robber-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HouseRobberII.php)|
|`0300. 最长上升子序列`|[Longest Increasing Subsequence](https://leetcode.com/problems/longest-increasing-subsequence/)||
|`0322. 零钱兑换`|[Coin Change](https://leetcode.com/problems/coin-change/)||
|`0309. 佳买卖股票时机含冷冻期`|[Best Time to Buy and Sell Stock with Cooldown](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-cooldown/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStockWithCooldown.php)|
|`0673. 最长递增子序列的个数`|[Number of Longest Increasing Subsequence](https://leetcode.com/problems/number-of-longest-increasing-subsequence/)||
|`0674. 最长连续递增序列`|[Longest Continuous Increasing Subsequence](https://leetcode.com/problems/longest-continuous-increasing-subsequence/)||
|`0714. 买卖股票的最佳时机含手续费`|[Best Time to Buy and Sell Stock with Transaction Fee](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-transaction-fee/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BestTimeToBuyAndSellStockWithTransactionFee.php)|
|`1143. 最长公共子序列`|[Longest Common Subsequence](https://leetcode.com/problems/longest-common-subsequence/)||
|`1289. 下降路径最小和 II`|[Minimum Falling Path Sum II](https://leetcode.com/problems/minimum-falling-path-sum-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinimumFallingPathSumII.php)|
|`1397. 找到所有好字符串`|[Find All Good Strings](https://leetcode.com/problems/find-all-good-strings/)||

</details>

<details>
<summary>Backtracking</summary>

|Subject|Source|Solution|
|---|---|---|
|`0036. 有效的数独`|[Valid Sudoku](https://leetcode.com/problems/valid-sudoku/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidSudoku.php)|
|`0037. 解数独`|[Sudoku Solver](https://leetcode.com/problems/sudoku-solver/)||
|`0039. 组合总和`|[Combination Sum](https://leetcode.com/problems/combination-sum/)||
|`0040. 组合总和 II`|[Combination Sum II](https://leetcode.com/problems/combination-sum-ii/)||
|`0046. 全排列`|[Permutations](https://leetcode.com/problems/permutations/)||
|`0047. 全排列 II`|[Permutations II](https://leetcode.com/problems/permutations-ii/)||
|`0051. N 皇后`|[N-Queens](https://leetcode.com/problems/n-queens/)||
|`0052. N 皇后 II`|[N-Queens II](https://leetcode.com/problems/n-queens-ii/)||
|`0078. 子集`|[Subsets](https://leetcode.com/problems/subsets/)||
|`0079. 单词搜索`|[Word Search](https://leetcode.com/problems/word-search/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/WordSearch.php)|
|`0090. 子集 II`|[Subsets II](https://leetcode.com/problems/subsets-ii/)||

</details>

<details>
<summary>Stack</summary>

|Subject|Source|Solution|
|---|---|---|
|`0020. 有效的括号`|[Valid Parentheses](https://leetcode.com/problems/valid-parentheses/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeInorderTraversal.php)|
|`0094. 二叉树的中序遍历`|[Binary Tree Inorder Traversal](https://leetcode.com/problems/binary-tree-inorder-traversal/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeInorderTraversal.php)|
|`0496. 下一个更大元素 I`|[Next Greater Element I](https://leetcode.com/problems/next-greatr-element-i/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NextGreaterElementI.php)|
|`0503. 下一个更大元素 II`|[Next Greater Element II](https://leetcode.com/problems/next-greater-element-i/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NextGreaterElementII.php)|
|`0739. 每日温度`|[Daily Temperatures](https://leetcode.com/problems/daily-temperatures/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DailyTemperatures.php)|

</details>

<details>
<summary>Greedy</summary>

</details>

<details>
<summary>Sort</summary>

</details>

<details>
<summary>Bit Manipulation</summary>

|Subject|Source|Solution|
|---|---|---|
|`0190. 颠倒二进制位`|[Reverse Bits](https://leetcode.com/problems/reverse-bits/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReverseBits.php)|
|`0191. 位 1 的个数`|[Number of 1 Bits](https://leetcode.com/problems/number-of-1-bits/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NumberOfOneBits.php)|
|`0231. 2 的幂`|[Power of Two](https://leetcode.com/problems/power-of-two/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PowerOfTwo.php)|
|`0338. 比特位计数`|[Counting Bits](https://leetcode.com/problems/counting-bits/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CountingBits.php)|
|`0461. 汉明距离`|[Hamming Distance](https://leetcode.com/problems/hamming-distance/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HammingDistance.php)|

</details>

<details>
<summary>Tree</summary>

|Subject|Source|Solution|
|---|---|---|
|`0020. 括号生成`|[Generate Parentheses](https://leetcode.com/problems/generate-parentheses/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/GenerateParentheses.php)|
|`0098. 验证二叉搜索树`|[Validate Binary Search Tree](https://leetcode.com/problems/validate-binary-search-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidateBinarySearchTree.php)|
|`0100. 相同的树`|[Same Tree](https://leetcode.com/problems/same-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/Pow.php)|
|`0102. 二叉树的层序遍历`|[Binary Tree Level Order Traversal](https://leetcode.com/problems/binary-tree-level-order-traversal/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeLevelOrderTraversal.php)|
|`0103. 二叉树的锯齿形层次遍历`|[Binary Tree Zigzag Level Order Traversal](https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeZigzagLevelOrderTraversal.php)|
|`0104. 二叉树的最大深度`|[Maximum Depth of Binary Tree](https://leetcode.com/problems/maximum-depth-of-binary-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MaximumDepthOfBinaryTree.php)|
|`0199. 二叉树的右视图`|[Binary Tree Right Side View](https://leetcode.com/problems/binary-tree-right-side-view/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeRightSideView.php)|
|`0230. 二叉搜索树中第 K 小的元素`|[Kth Smallest Element in a BST](https://leetcode.com/problems/kth-smallest-element-in-a-bst/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/KthSmallestElementInABST.php)|
|`0235. 二叉搜索树的最近公共祖先`|[Lowest Common Ancestor of a Binary Search Tree](https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LowestCommonAncestorOfABinarySearchTree.php)|
|`0236. 二叉树的最近公共祖先`|[Lowest Common Ancestor of a Binary Tree](https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LowestCommonAncestorOfABinaryTree.php)|
|`0450. 删除二叉搜索树中的节点`|[Delete Node in a Binary Search Tree](https://leetcode.com/problems/delete-node-in-a-bst/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DeleteNodeInABinarySearchTree.php)|
|`0515. 在每个树行中找最大值`|[Find Largest Value in Each Tree Row](https://leetcode.com/problems/find-largest-value-in-each-tree-row/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindLargestValueInEachTreeRow.php)|
|`0637. 二叉树的层平均值`|[Average of Levels in Binary Tree](https://leetcode.com/problems/average-of-levels-in-binary-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AverageOfLevelsInBinaryTree.php)|
|`0700. 二叉搜索树中的搜索`|[Search in a Binary Search Tree](https://leetcode.com/problems/search-in-a-binary-search-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SearchInABinarySearchTree.php)|
|`0701. 二叉搜索树中的插入操作`|[Insert into a Binary Search Tree](https://leetcode.com/problems/insert-into-a-binary-search-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/InsertIntoABinarySearchTree.php)|
|`0993. 二叉树的堂兄弟节点`|[Cousins in Binary Tree](https://leetcode.com/problems/cousins-in-binary-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/CousinsInBinaryTree.php)|

</details>

<details>
<summary>Depth-First Search</summary>

</details>

<details>
<summary>Breadth-First Search</summary>

</details>

<details>
<summary>Union Find</summary>

|Subject|Source|Solution|
|---|---|---|
|`0200. 岛屿数量`|[Number of Islands](https://leetcode.com/problems/number-of-islands/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NumberOfIslands.php)|

</details>

<details>
<summary>Graph</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Design</summary>

|Subject|Source|Solution|
|---|---|---|
|`0208. 实现 Trie（前缀树）`|[Implement Trie (Prefix Tree)](https://leetcode.com/problems/implement-trie-prefix-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ImplementTriePrefixTree.php)|
|`0225. 用队列实现栈`|[Implement Stack using Queues](https://leetcode.com/problems/implement-stack-using-queues/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ImplementStackUsingQueues.php)|
|`0232. 用栈实现队列`|[Implement Queue using Stacks](https://leetcode.com/problems/implement-queue-using-stacks/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ImplementQueueUsingStacks.php)|

</details>

<details>
<summary>Topological Sort</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Trie</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Binary Indexed Tree</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Segment Tree</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Binary Search Tree</summary>

|Subject|Source|Solution|
|---|---|---|
|`0278. 第一个错误的版本`|[First Bad Version](https://leetcode.com/problems/first-bad-version/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FirstBadVersion.php)|

</details>

<details>
<summary>Recursion</summary>

|Subject|Source|Solution|
|---|---|---|
|`0509. 斐波那契数`|[Fibonacci Number](https://leetcode.com/problems/fibonacci-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FibonacciNumber.php)|

</details>

<details>
<summary>Brainteaser</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Memoization</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Queue</summary>

|Subject|Source|Solution|
|---|---|---|
|`0239. 滑动窗口最大值`|[Sliding Window Maximum](https://leetcode.com/problems/sliding-window-maximum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SlidingWindowMaximum.php)|

</details>

<details>
<summary>Reservoir Sampling</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Ordered Map</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Geometry</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Rejection Sampling</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Sliding Window</summary>

|Subject|Source|Solution|
|---|---|---|
|`0003. 无重复字符的最长子串`|[Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestSubstringWithoutRepeatingCharacters.php)|
|`0076. 最小覆盖子串`|[Minimum Window Substring](https://leetcode.com/problems/minimum-window-substring/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinimumWindowSubstring.php)|
|`0438. 找到字符串中所有字母异位词`|[Find All Anagrams in a String](https://leetcode.com/problems/find-all-anagrams-in-a-string/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindAllAnagramsInAString.php)|
|`0567. 字符串的排列`|[Permutation in String](https://leetcode.com/problems/permutation-in-string/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PermutationInString.php)|

</details>

<details>
<summary>Line Sweep</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Rolling Hash</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Suffix Array</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Database</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Shell</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Concurrency</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Sorting</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Heap (Priority Queue)</summary>

|Subject|Source|Solution|
|---|---|---|
|`0295. 数据流的中位数`|[Find Median from Data Stream](https://leetcode.com/problems/find-median-from-data-stream/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindMedianFromDataStream.php)|
|`0347. 前 K 个高频元素`|[Top K Frequent Elements](https://leetcode.com/problems/top-k-frequent-elements/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TopKFrequentElements.php)|
|`0378. 有序矩阵中第 K 小的元素`|[Kth Smallest Element in a Sorted Matrix](https://leetcode.com/problems/kth-smallest-element-in-a-sorted-matrix/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/KthSmallestElementInASortedMatrix.php)|
|`0703. 数据流中的第 K 大元素`|[Kth Largest Element in a Stream](https://leetcode.com/problems/kth-largest-element-in-a-stream/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/KthLargestElementInAStream.php)|

</details>

<details>
<summary>Merge Sort</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>String Matching</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Matrix</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Monotonic Stack</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Simulation</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Combinatorics</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Binary Tree</summary>

|Subject|Source|Solution|
|---|---|---|
|`0101. 对称二叉树`|[Symmetric Tree](https://leetcode.com/problems/symmetric-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SymmetricTree.php)|
|`0124. 二叉树最大路径和`|[Binary Tree Maximum Path Sum](https://leetcode.com/problems/binary-tree-maximum-path-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/BinaryTreeMaximumPathSum.php)|
|`0226. 翻转二叉树`|[Invert Binary Tree](https://leetcode.com/problems/invert-binary-tree/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/InvertBinaryTree.php)|

</details>

<details>
<summary>Doubly-Linked List</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Interactive</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Bucket Sort</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Radix Sort</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Counting</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Data Stream</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Iterator</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Hash Function</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Enumeration</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Number Theory</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Prefix Sum</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Quickselect</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Ordered Set</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Monotonic Queue</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Counting Sort</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Game Theory</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Eulerian Circuit</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Randomized</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Shortest Path</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Bitmask</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Probability and Statistics</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Minimum Spanning Tree</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Biconnected Component</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

<details>
<summary>Strongly Connected Component</summary>

|Subject|Source|Solution|
|---|---|---|

</details>

### 剑指 Offer

* [032. 从上到下打印二叉树](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-lcof/)
* [032. 从上到下打印二叉树 II](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-ii-lcof/)
* [032. 从上到下打印二叉树 III](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-iii-lcof/)
* [061. 扑克牌中的顺子](https://leetcode-cn.com/problems/bu-ke-pai-zhong-de-shun-zi-lcof/)

### 程序员面试金典

* [0403. 特定深度节点链表](https://leetcode-cn.com/problems/list-of-depth-lcci/)


## License

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php?ref=badge_large)

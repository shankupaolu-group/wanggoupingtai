# git使用流程

[TOC]





## 1. 配置全局用户名和邮箱

配置全局用户名：	`git config --global user.name=“yourname”`

配置邮箱：`git config --global user.email="youremail@xx.com"`

配置完全局用户名和邮箱后，在git仓库进行提交后，在版本日志上可以显示提交者的用户名和邮箱名，建议用户名和邮箱名与github上的账号一致。

## 2. 初始化仓库

在项目文件夹下初始化仓库：`git init`

## 3. 添加远程仓库

建立仓库大多数是为了更好地与他人协作，所以应该有一个远程仓库，大家都把提交推送到远程仓库或从远程仓库拉取新变更。

添加远程仓库origin：`git remote add origin <repo-url>`.

请将 `<repo-url>`替换为远程仓库的url地址。

origin是默认的名字，可以换成其他有意义的名字。

 在github的仓库页面，有个名为<kbd>Clone or download</kbd>的按钮，点击可以看到仓库的url（此url不是该仓库页面的url），复制下来，假设为 `https://github.com/rattonlzh/rattonlzh.github.io.git`，添加远程仓库并命名为github的命令：`git remote add github https://github.com/rattonlzh/rattonlzh.github.io.git`。下文提到的github都代指使用git新添加的远程仓库。

## 4. 克隆仓库

在当前文件夹下克隆远程仓库到本地：`git clone <repo-url>`

该操作相当于`git init`+  `git remote add origin <repo-url>` + `git branch set-upstream-to=origin/master` + `git pull`. 





## 5. 添加提交

将所有变更添加到暂存区:`git add .`

将暂存区的变更提交到本地仓库并编写提交注释：`git commit -m “提交信息”`

一步到位，直接将变更提交：`git add . & git commit -m “提交信息”`

一般来说，做了变更就将变更添加到暂存区，当暂存区的变更足够多时，再考虑提交，因为每次提交都是记录在版本历史中的，为了版本历史的每次提交都是有意义的，应该尽量避免只是修改了几个单词等鸡肋的提交。

## 6. 关联远程分支

设置本地master分支的上游分支为github的master分支的命令：`git branch –-set-upstream-to=github/master  master `

## 7. 从远程分支拉取内容

假设添加了远程仓库并命名为github，拉取github的master分支内容合并到本地仓库当前分支的命令：`git pull github master`

如果设置了上游分支，可以直接使用 `git pull`命令从上游分支拉取内容。



## 8. 推送到远程分支

推送本地的local分支到远程仓库github的master分支的命令：`git push github local:master`

如果设置了上游分支，可以直接使用 `git push`命令。

第一次push时指定上游分支为github的master分支（该分支必须是已存在）的命令： `git push -u github master`

## 9. 推送远程分支失败的原因

1. 没有该远程仓库的写权限，需要通知该仓库的拥有者分配写权限
2. 本地的版本历史落后于远程仓库的版本历史，这是在协作时你的同伴推送了新内容到远程仓库上而你没有及时同步导致的。此时在push前先 `git pull`一下就可以了。
3. 网络连接有问题

## 10. 创建本地新分支

创建dev分支并切换到dev分支： `git checkout -b dev`

重新切换到master分支： `git checkout master`

查看本地分支： `git branch`. *前缀表示该分支为正在使用的分支

查看所有分支（包括远程分支和HEAD指向的分支）： `git branch -a`

## 11. 删除本地分支

删除dev分支：`git branch -d dev`

## 12. 创建新远程分支

新建本地分支newbranch并推送到远程仓库的newbranch分支上，远程仓库如果没有该分支，则会新建一个： `git push github newbranch:newbranch` 

## 13. 删除远程分支

当临时创建的分支合并到master分支后，就没有存在的价值了，则对其删除。

删除远程github仓库的dev分支的命令：`git push github --delete dev`或 `git push github :dev`

## 14. 版本回溯

查看提交历史： `git log`

回退到最近的提交版本： `git reset HEAD .`

回退到上一次提交版本：`git reset ^HEAD`

回退到指定版本：

- 查看版本历史：`git log`
- 每个提交都有一个SHA值作为其唯一标识，回退到指定版本：`git checkout <sha值>`(只需SHA值可唯一标识该提交的前几位即可)

撤销暂存区的修改（回退到上一个 `git commit` 或 `git add` 前的状态）：`git checkout –- .`

## 15. 臭名昭著的强制推送

非常不建议使用的命令：`git push -f`

该命令会将本地分支强制提交到远程仓库，导致远程分支的版本历史被本地的版本历史代替，也就是说如果你的同伴在远程分支上新增了内容，你没有pull下来，直接来个`git push -f`，那么远程分支上你的同伴做的新更改就消失了，等于让别人白干，且无法撤销。

## git协作方法

分支的管理原则：

- 每个开发人员创建一个分支 ，每人在各自的分支工作

- 针对某个bug临时创建分支

- 实验性功能临时创建一个分支

- 经过测试、功能稳定的分支合并到master分支，master分支是最终的项目成果

    

    
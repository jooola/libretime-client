# coding: utf-8

"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""

from datetime import date, datetime  # noqa: F401
import decimal  # noqa: F401
import functools  # noqa: F401
import io  # noqa: F401
import re  # noqa: F401
import typing  # noqa: F401
import typing_extensions  # noqa: F401
import uuid  # noqa: F401

import frozendict  # noqa: F401

from libretime_client import schemas  # noqa: F401


class Show(
    schemas.DictSchema
):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """


    class MetaOapg:
        required = {
            "auto_playlist_repeat",
            "auto_playlist_enabled",
            "live_enabled",
            "linkable",
            "name",
            "id",
            "linked",
        }
        
        class properties:
            id = schemas.IntSchema
            
            
            class name(
                schemas.StrSchema
            ):
                pass
            live_enabled = schemas.BoolSchema
            linked = schemas.BoolSchema
            linkable = schemas.BoolSchema
            auto_playlist_enabled = schemas.BoolSchema
            auto_playlist_repeat = schemas.BoolSchema
            
            
            class description(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'description':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class genre(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'genre':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class url(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'url':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class image(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'image':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class foreground_color(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'foreground_color':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class background_color(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'background_color':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class auto_playlist(
                schemas.IntBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneDecimalMixin
            ):
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, decimal.Decimal, int, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'auto_playlist':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            __annotations__ = {
                "id": id,
                "name": name,
                "live_enabled": live_enabled,
                "linked": linked,
                "linkable": linkable,
                "auto_playlist_enabled": auto_playlist_enabled,
                "auto_playlist_repeat": auto_playlist_repeat,
                "description": description,
                "genre": genre,
                "url": url,
                "image": image,
                "foreground_color": foreground_color,
                "background_color": background_color,
                "auto_playlist": auto_playlist,
            }
    
    auto_playlist_repeat: MetaOapg.properties.auto_playlist_repeat
    auto_playlist_enabled: MetaOapg.properties.auto_playlist_enabled
    live_enabled: MetaOapg.properties.live_enabled
    linkable: MetaOapg.properties.linkable
    name: MetaOapg.properties.name
    id: MetaOapg.properties.id
    linked: MetaOapg.properties.linked
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["name"]) -> MetaOapg.properties.name: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["live_enabled"]) -> MetaOapg.properties.live_enabled: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["linked"]) -> MetaOapg.properties.linked: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["linkable"]) -> MetaOapg.properties.linkable: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["auto_playlist_enabled"]) -> MetaOapg.properties.auto_playlist_enabled: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["auto_playlist_repeat"]) -> MetaOapg.properties.auto_playlist_repeat: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["description"]) -> MetaOapg.properties.description: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["genre"]) -> MetaOapg.properties.genre: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["url"]) -> MetaOapg.properties.url: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["image"]) -> MetaOapg.properties.image: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["foreground_color"]) -> MetaOapg.properties.foreground_color: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["background_color"]) -> MetaOapg.properties.background_color: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["auto_playlist"]) -> MetaOapg.properties.auto_playlist: ...
    
    @typing.overload
    def __getitem__(self, name: str) -> schemas.UnsetAnyTypeSchema: ...
    
    def __getitem__(self, name: typing.Union[typing_extensions.Literal["id", "name", "live_enabled", "linked", "linkable", "auto_playlist_enabled", "auto_playlist_repeat", "description", "genre", "url", "image", "foreground_color", "background_color", "auto_playlist", ], str]):
        # dict_instance[name] accessor
        return super().__getitem__(name)
    
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["name"]) -> MetaOapg.properties.name: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["live_enabled"]) -> MetaOapg.properties.live_enabled: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["linked"]) -> MetaOapg.properties.linked: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["linkable"]) -> MetaOapg.properties.linkable: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["auto_playlist_enabled"]) -> MetaOapg.properties.auto_playlist_enabled: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["auto_playlist_repeat"]) -> MetaOapg.properties.auto_playlist_repeat: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["description"]) -> typing.Union[MetaOapg.properties.description, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["genre"]) -> typing.Union[MetaOapg.properties.genre, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["url"]) -> typing.Union[MetaOapg.properties.url, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["image"]) -> typing.Union[MetaOapg.properties.image, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["foreground_color"]) -> typing.Union[MetaOapg.properties.foreground_color, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["background_color"]) -> typing.Union[MetaOapg.properties.background_color, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["auto_playlist"]) -> typing.Union[MetaOapg.properties.auto_playlist, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: str) -> typing.Union[schemas.UnsetAnyTypeSchema, schemas.Unset]: ...
    
    def get_item_oapg(self, name: typing.Union[typing_extensions.Literal["id", "name", "live_enabled", "linked", "linkable", "auto_playlist_enabled", "auto_playlist_repeat", "description", "genre", "url", "image", "foreground_color", "background_color", "auto_playlist", ], str]):
        return super().get_item_oapg(name)
    

    def __new__(
        cls,
        *_args: typing.Union[dict, frozendict.frozendict, ],
        auto_playlist_repeat: typing.Union[MetaOapg.properties.auto_playlist_repeat, bool, ],
        auto_playlist_enabled: typing.Union[MetaOapg.properties.auto_playlist_enabled, bool, ],
        live_enabled: typing.Union[MetaOapg.properties.live_enabled, bool, ],
        linkable: typing.Union[MetaOapg.properties.linkable, bool, ],
        name: typing.Union[MetaOapg.properties.name, str, ],
        id: typing.Union[MetaOapg.properties.id, decimal.Decimal, int, ],
        linked: typing.Union[MetaOapg.properties.linked, bool, ],
        description: typing.Union[MetaOapg.properties.description, None, str, schemas.Unset] = schemas.unset,
        genre: typing.Union[MetaOapg.properties.genre, None, str, schemas.Unset] = schemas.unset,
        url: typing.Union[MetaOapg.properties.url, None, str, schemas.Unset] = schemas.unset,
        image: typing.Union[MetaOapg.properties.image, None, str, schemas.Unset] = schemas.unset,
        foreground_color: typing.Union[MetaOapg.properties.foreground_color, None, str, schemas.Unset] = schemas.unset,
        background_color: typing.Union[MetaOapg.properties.background_color, None, str, schemas.Unset] = schemas.unset,
        auto_playlist: typing.Union[MetaOapg.properties.auto_playlist, None, decimal.Decimal, int, schemas.Unset] = schemas.unset,
        _configuration: typing.Optional[schemas.Configuration] = None,
        **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
    ) -> 'Show':
        return super().__new__(
            cls,
            *_args,
            auto_playlist_repeat=auto_playlist_repeat,
            auto_playlist_enabled=auto_playlist_enabled,
            live_enabled=live_enabled,
            linkable=linkable,
            name=name,
            id=id,
            linked=linked,
            description=description,
            genre=genre,
            url=url,
            image=image,
            foreground_color=foreground_color,
            background_color=background_color,
            auto_playlist=auto_playlist,
            _configuration=_configuration,
            **kwargs,
        )
